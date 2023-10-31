<x-filament-panels::page.simple>

    <x-filament-panels::form wire:submit="save">
        {{ $this->form }}
        <x-filament-panels::form.actions
        :actions="$this->getCachedFormActions()"
        :full-Width="$this->hasFullWidthFormActions()"
        alignment="right"
        />
    </x-filament-panels::form>

</x-filament-panels::page.simple>
