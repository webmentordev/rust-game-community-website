<div class="commands tabcontent" id="commands">
    <h1 class="title">Commands Information</h1>
    <form wire:submit.prevent="storeRanking" method="post">
        @if (session('rankSuccess'))
            <p class="success">{{ session('rankSuccess') }}</p>
        @endif
        @error('name')
            {{ $message }}
        @enderror
        @error('command')
            {{ $message }}
        @enderror
        @error('default')
            {{ $message }}
        @enderror
        @error('elite')
            {{ $message }}
        @enderror
        <div class="flex">
            <input class="side" type="text" name="name" placeholder="Title" wire:model="name">
            <input type="text" name="command" placeholder="Command (/skinbox)" wire:model="command">
        </div>
        <div class="flex">
            <select class="side" name="default" id="default" wire:model="default">
                <option value="" selected>--Select Default--</option>
                <option value="yes" >Yes</option>
                <option value="no">No</option>
            </select>
            <select name="elite" id="elite" wire:model="elite">
                <option value="" selected>--Select Elite--</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <button type="submit">Submit</button>
    </form>
    <h1 class="title">Commands Database</h1>
    <div class="table">
        <table>
            <tr>
                <th class="capital">Name</th>
                <th>Command</th>
                <th class="everyone"><span>Everyone</span></th>
                <th class="elite"><span>Elite+</span></th>
                <th>Delete</th>
            </tr>
            @foreach ($commands as $command)
                <tr>
                    <td>{{ $command->name }}</td>
                    <td class="command">{{ $command->command }}</td>
                    <td>@if ($command->default == 'yes')
                        <i class="fas fa-check"></i>
                    @elseif($command->default == 'no')
                        <i class="fas fa-times"></i>
                    @else
                        {{ $command->default }}
                    @endif</td>
                    <td>@if ($command->elite == 'yes')
                        <i class="fas fa-check"></i>
                    @elseif($command->elite == 'no')
                        <i class="fas fa-times"></i>
                    @else
                        {{ $command->elite }}
                    @endif</td>
                    <th>
                        <form wire:submit.prevent="deleteRanking({{ $command->id }})" method="post"><button type="submit">Delete</button></form>
                    </th>
                </tr>
            @endforeach
        </table>
        <div class="pagination py-3">
            {{ $commands->links() }}
        </div>
    </div>
</div>