 <flux:button class="cursor-pointer" variant="primary" wire:click="{{ $action }}({{ $id }})"
     color="{{ $color ?? 'rose' }}">
     {{ $button ?? 'Action' }}
 </flux:button>
