<?php
namespace Fago\Samples\Form3;

final class FormId
{

    private string $id;

    public final function __construct()
    {}

    public final function WithId(string $id): FormAction
    {
        $this->id = $id;
        return new FormAction($this);
    }

    public function Value(): string
    {
        return $this->id;
    }
}

