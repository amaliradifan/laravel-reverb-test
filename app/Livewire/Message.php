<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Events\RealtimeMessage;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Message extends Component
{
    use LivewireAlert;

    public string $message;

    public function triggerEvent() : void
    {
        event(new RealtimeMessage($this->message));
        $this->message = '';
    }

    #[On('echo:message-channel,RealtimeMessage')] 
    public function handleMessage($message) : void
    {
        $this->alert('success', $message['message']);
    }

    public function render()
    {
        return view('livewire.message');
    }
}
