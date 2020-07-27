<?php
/**
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Controllers\Admin;

use App\Models\EpisodeModel;
use App\Models\PodcastModel;

class Episode extends BaseController
{
    protected \App\Entities\Podcast $podcast;
    protected ?\App\Entities\Episode $episode;

    public function _remap($method, ...$params)
    {
        switch ($method) {
            case 'list':
                if (
                    !has_permission('episodes-list') ||
                    !has_permission("podcasts:$params[0]:episodes-list")
                ) {
                    throw new \RuntimeException(
                        lang('Auth.notEnoughPrivilege')
                    );
                }
            case 'edit':
                if (
                    !has_permission('episodes-edit') ||
                    !has_permission("podcasts:$params[0]:episodes-edit")
                ) {
                    throw new \RuntimeException(
                        lang('Auth.notEnoughPrivilege')
                    );
                }
            case 'delete':
                if (
                    !has_permission('episodes-delete') ||
                    !has_permission("podcasts:$params[0]:episodes-delete")
                ) {
                    throw new \RuntimeException(
                        lang('Auth.notEnoughPrivilege')
                    );
                }
        }

        $podcast_model = new PodcastModel();

        $this->podcast = $podcast_model->find($params[0]);

        if (count($params) > 1) {
            $episode_model = new EpisodeModel();
            if (
                !($this->episode = $episode_model
                    ->where([
                        'id' => $params[1],
                        'podcast_id' => $params[0],
                    ])
                    ->first())
            ) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        }

        return $this->$method();
    }

    public function list()
    {
        $data = [
            'podcast' => $this->podcast,
        ];

        return view('admin/episode/list', $data);
    }

    public function view()
    {
        $data = ['episode' => $this->episode];

        return view('admin/episode/view', $data);
    }

    public function create()
    {
        helper(['form']);

        $data = [
            'podcast' => $this->podcast,
        ];

        echo view('admin/episode/create', $data);
    }

    public function attemptCreate()
    {
        $rules = [
            'enclosure' => 'uploaded[enclosure]|ext_in[enclosure,mp3,m4a]',
            'image' =>
                'uploaded[image]|is_image[image]|ext_in[image,jpg,png]|permit_empty',
        ];

        if (!$this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $new_episode = new \App\Entities\Episode([
            'podcast_id' => $this->podcast->id,
            'title' => $this->request->getPost('title'),
            'slug' => $this->request->getPost('slug'),
            'enclosure' => $this->request->getFile('enclosure'),
            'pub_date' => $this->request->getPost('pub_date'),
            'description' => $this->request->getPost('description'),
            'image' => $this->request->getFile('image'),
            'explicit' => (bool) $this->request->getPost('explicit'),
            'number' => $this->request->getPost('episode_number'),
            'season_number' => $this->request->getPost('season_number'),
            'type' => $this->request->getPost('type'),
            'author_name' => $this->request->getPost('author_name'),
            'author_email' => $this->request->getPost('author_email'),
            'block' => (bool) $this->request->getPost('block'),
        ]);

        $episode_model = new EpisodeModel();

        if (!$episode_model->save($new_episode)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $episode_model->errors());
        }

        return redirect()->route('episode_list', [$this->podcast->id]);
    }

    public function edit()
    {
        helper(['form']);

        $data = [
            'podcast' => $this->podcast,
            'episode' => $this->episode,
        ];

        echo view('admin/episode/edit', $data);
    }

    public function attemptEdit()
    {
        $rules = [
            'enclosure' =>
                'uploaded[enclosure]|ext_in[enclosure,mp3,m4a]|permit_empty',
            'image' =>
                'uploaded[image]|is_image[image]|ext_in[image,jpg,png]|permit_empty',
        ];

        if (!$this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->episode->title = $this->request->getPost('title');
        $this->episode->slug = $this->request->getPost('slug');
        $this->episode->pub_date = $this->request->getPost('pub_date');
        $this->episode->description = $this->request->getPost('description');
        $this->episode->explicit = (bool) $this->request->getPost('explicit');
        $this->episode->number = $this->request->getPost('episode_number');
        $this->episode->season_number = $this->request->getPost('season_number')
            ? $this->request->getPost('season_number')
            : null;
        $this->episode->type = $this->request->getPost('type');
        $this->episode->author_name = $this->request->getPost('author_name');
        $this->episode->author_email = $this->request->getPost('author_email');
        $this->episode->block = (bool) $this->request->getPost('block');

        $enclosure = $this->request->getFile('enclosure');
        if ($enclosure->isValid()) {
            $this->episode->enclosure = $enclosure;
        }
        $image = $this->request->getFile('image');
        if ($image) {
            $this->episode->image = $image;
        }

        $episode_model = new EpisodeModel();

        if (!$episode_model->save($this->episode)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $episode_model->errors());
        }

        return redirect()->route('episode_list', [$this->podcast->id]);
    }

    public function delete()
    {
        $episode_model = new EpisodeModel();
        $episode_model->delete($this->episode->id);

        return redirect()->route('episode_list', [$this->podcast->id]);
    }
}