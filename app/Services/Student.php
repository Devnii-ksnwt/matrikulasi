<?php

namespace App\Services;

class Student extends Service
{

    public function update($studentId, $data)
    {
        $response = $this->patch("/users/students/$studentId", $data);

        return $this->showResponse($response);
    }

    public function detail($studentId)
    {
        $response = $this->get("/users/students/$studentId");

        return $this->showResponse($response);
    }
}
