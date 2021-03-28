<?php 

namespace App\Bridges;

use App\Models\Provider;
use Exception;

class ProviderBridges
{
    /**
     *
     * @var array
     */
    private $data;

    /**
     *
     * @var array
     */
    private $param;


    public function  __construct(array $data, array $param)
    {
        $this->data = $data;
        $this->param = $param;
    }

    public function insertAndGetData()
    {
        $provider = $this->insertProvider($this->param);
        $this->insertToDo($provider, $this->data, $this->param['settings']);
        return $this->data;
    }

    private function insertProvider(array $data)
    {
        return Provider::create($data);
    }

    private function formatingData($data, $settings)
    {
        if (gettype($settings['task_name']) == 'string') {
            $data = [
                'task_name' => $data[$settings['task_name']],
                'difficulty' => $data[$settings['difficulty']],
                'duration' => $data[$settings['duration']]
            ];
        } elseif (gettype($settings['task_name']) == 'array' && $settings['task_name']['key']) {
            $key = array_key_first($data);
            $data = [
                'task_name' => $key,
                'difficulty' => $data[$key][$settings['difficulty']],
                'duration' => $data[$key][$settings['duration']]
            ];
        } else {
            return throw new Exception('There are some error in api config');
        }
        return $data;
    }

    private function insertToDo(Provider $provider, array $data, array $settings)
    {
        foreach ($data as $todo) {
            $provider->toDo()->create($this->formatingData($todo, $settings));
        }
    }
}