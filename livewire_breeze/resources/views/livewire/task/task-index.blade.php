<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    <div class="center">
                        <form action="" wire:submit="save">
                            <label for="">Name</label>
                            <input type="text" wire:model="name">
                            <br>
                             <label for="">Class</label>
                             <input type="text" wire:model="class">
                             <br>
                             <label for="">Age</label>
                             <input type="number" wire:model="age">
                             
                             <br>
                            <button type="submit" style="background-color: green;">Submit</button>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>



</div>
