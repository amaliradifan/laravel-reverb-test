<div>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">Send Realtime Message</h2>
                <form class="form" wire:submit.prevent='triggerEvent'>
                    <input wire:model='message' type="text" class="form-control" placeholder="Your message">
                    <input type="submit" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>
</div>