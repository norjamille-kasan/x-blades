<?php

namespace App\Traits;

trait WithToaster
{
    public function toastSuccess($title, $message)
    {
        //v3
        // $this->dispatch('toast',
        //     title: $title,
        //     type: 'success',
        //     id: now()->format('YmdHis'),
        //     message: $message
        // );

        //v2
        $this->dispatchBrowserEvent('toast', [
            'title' => $title,
            'type' => 'success',
            'id' => now()->format('YmdHis'),
            'message' => $message
        ]);
    }

    public function toastError($title, $message)
    {
        // v3
        // $this->dispatch('toast',
        //     title: $title,
        //     type: 'error',
        //     id: now()->format('YmdHis'),
        //     message: $message
        // );

        //v2
        $this->dispatchBrowserEvent('toast', [
            'title' => $title,
            'type' => 'error',
            'id' => now()->format('YmdHis'),
            'message' => $message
        ]);
    }

    public function toastInfo($title, $message)
    {
        // v3
        // $this->dispatch('toast',
        //     title: $title,
        //     type: 'info',
        //     id: now()->format('YmdHis'),
        //     message: $message
        // );

        //v2
        $this->dispatchBrowserEvent('toast', [
            'title' => $title,
            'type' => 'info',
            'id' => now()->format('YmdHis'),
            'message' => $message
        ]);
    }

    public function toastWarning($title, $message)
    {
        // v3
        // $this->dispatch('toast',
        //     title: $title,
        //     type: 'warning',
        //     id: now()->format('YmdHis'),
        //     message: $message
        // );

        //v2
        $this->dispatchBrowserEvent('toast', [
            'title' => $title,
            'type' => 'warning',
            'id' => now()->format('YmdHis'),
            'message' => $message
        ]);
    }


}
