<?php

namespace App\Traits;

trait WithToaster
{
    public function toastSuccess($title, $message)
    {
        // $this->dispatch('toast',
        //     title: $title,
        //     type: 'success',
        //     id: now()->format('YmdHis'),
        //     message: $message
        // );

        $this->dispatchBrowserEvent('toast', [
            'title' => $title,
            'type' => 'success',
            'id' => now()->format('YmdHis'),
            'message' => $message
        ]);
    }

    public function toastError($title, $message)
    {
        // $this->dispatch('toast',
        //     title: $title,
        //     type: 'error',
        //     id: now()->format('YmdHis'),
        //     message: $message
        // );

        $this->dispatchBrowserEvent('toast', [
            'title' => $title,
            'type' => 'error',
            'id' => now()->format('YmdHis'),
            'message' => $message
        ]);
    }

    public function toastInfo($title, $message)
    {
        // $this->dispatch('toast',
        //     title: $title,
        //     type: 'info',
        //     id: now()->format('YmdHis'),
        //     message: $message
        // );

        $this->dispatchBrowserEvent('toast', [
            'title' => $title,
            'type' => 'info',
            'id' => now()->format('YmdHis'),
            'message' => $message
        ]);
    }

    public function toastWarning($title, $message)
    {
        // $this->dispatch('toast',
        //     title: $title,
        //     type: 'warning',
        //     id: now()->format('YmdHis'),
        //     message: $message
        // );

        $this->dispatchBrowserEvent('toast', [
            'title' => $title,
            'type' => 'warning',
            'id' => now()->format('YmdHis'),
            'message' => $message
        ]);
    }


}
