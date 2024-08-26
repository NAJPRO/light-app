<div>
    <div class="container fw-bold fs-5 px-5">
        &#128161 {{$pourcentage}} %
    </div>    
    <div class="progress mt-1" style="height: 30px; width: 180px">
        <div
            class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
            role="progressbar"
            style="width: {{$pourcentage}}%;"
            aria-valuenow="{{$pourcentage}}"
            aria-valuemin="0"
            aria-valuemax="100"
            
        >
            
        </div>
    </div>
    <div class="mt-3" style="width: 180px">
        <div class="btn btn-danger" wire:click='ofLight'>Off</div>
        <div class="btn btn-secondary" @disabled($pourcentage === 90) wire:click='upLight'>+</div>
        <div class="btn btn-secondary" wire:click='downLight' @disabled($pourcentage === 5)>-</div>
        <div class="btn btn-primary" wire:click='onLight'>On</div>
    </div>
</div>
