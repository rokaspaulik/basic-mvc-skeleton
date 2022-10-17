<?php

namespace Rokas\Demo\App\Services;

class JsonService
{
    private const BASE_PATH = __DIR__ . '/../../Storage/';

    public function saveJson(array $data, string $filename): void
    {
        $fullPath = self::BASE_PATH . $filename . '.json';

        $dataOld = $this->loadJson($filename);
        $dataOld[] = [
            'id' => count($dataOld),
            'data' => $data
        ];

        $encoded = json_encode($dataOld);

        file_put_contents($fullPath, $encoded);
    }

    public function loadJson(string $filename, ?int $id = null): array
    {
        $fullPath = self::BASE_PATH . $filename . '.json';

        if (file_exists($fullPath)) {
            $jsonData = file_get_contents($fullPath);
            $jsonData = json_decode($jsonData, true);

            if (is_int($id)) {
                $jsonData = array_filter($jsonData, function ($data) use ($id) {
                    return $data['id'] === $id;
                });
            }

            return $jsonData;
        }

        return [];
    }
}
