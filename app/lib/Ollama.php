<?php
class Ollama {
    private $url;
    private $model;
    public function __construct($url, $model) { $this->url = rtrim($url, '/'); $this->model = $model; }
    public function generate($prompt) {
        $payload = json_encode(array('model'=>$this->model,'prompt'=>$prompt,'stream'=>false));
        $ch = curl_init($this->url.'/api/generate');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 120);
        $raw = curl_exec($ch);
        if ($raw === false) throw new Exception('Ollama connection failed: '.curl_error($ch));
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($code < 200 || $code >= 300) throw new Exception('Ollama returned HTTP '.$code);
        $data = json_decode($raw, true);
        return isset($data['response']) ? $data['response'] : '';
    }
    public function tags() {
        $ch = curl_init($this->url.'/api/tags');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $raw = curl_exec($ch); curl_close($ch);
        return json_decode($raw, true);
    }
}
