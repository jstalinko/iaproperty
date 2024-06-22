<x-filament-panels::page>
    <x-filament-panels::form wire:submit="save">
        {{ $this->form }}
        <div>
            <x-filament::button type="save" size="md">
                Save
            </x-filament::button>
        </div>
    </x-filament-panels::form>
</x-filament-panels::page>
