<div class="block fixed w-full h-screen bg-black bg-opacity-30 overflow-auto" style="z-index:1000;">
    <div class="px-6 w-fit h-fit flex-col rounded-3xl bg-white absolute inset-0 items-center justify-center left-0 top-0 m-auto block">
        <div class="flex border-b-2 py-6 flex-row items-center justify-between">
            <p class="text-blue-900 font-bold">Advanced Filters</p>
            <x-icons.close-cross />
        </div>
        <div class="flex overflow-hidden p-6">
            <div class="grid grid-cols-2 gap-6 w-full">
                <div>
                    <x-inputs.date title="Date From" />
                </div>
                <div>
                    <x-inputs.date title="Date To" />
                </div>
                <div>
                    <x-inputs.select title="Payer" selectionLabel="Select payer" />
                </div>
                <div>
                    <x-inputs.select title="Order Type" selectionLabel="Select order type" />
                </div>
            </div>
        </div>
        <div class="flex flex-row-reverse items-center w-full py-6 border-t-2">
            <x-buttons.main icon="white-checkmark" variation="primary">Apply Filter</x-buttons.main>
            <x-buttons.main icon="red-minus-circle" variation="alert">Close</x-buttons.main>
        </div>
    </div>
</div>