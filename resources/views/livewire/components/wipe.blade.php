<div class="wipe_purge tabcontent" id="wipe_purge">
    <h1 class="title">Wipe & Purge Schedule</h1>
    <form wire:submit.prevent="storeWipes" method="post">
        @if (session('wipeSuccess'))
            <p class="success">{{ session('wipeSuccess') }}</p>
        @endif
        
        <div class="flex">
            <input type="number" class="side" name="day" wire:model="day"  placeholder="Wipe Day" autocomplete="none">
            <select name="month" id='month' wire:model="month">
                <option value=''>--Select Wipe Month--</option>
                <option selected value='Janaury'>Janaury</option>
                <option value='February'>February</option>
                <option value='March'>March</option>
                <option value='April'>April</option>
                <option value='May'>May</option>
                <option value='June'>June</option>
                <option value='July'>July</option>
                <option value='August'>August</option>
                <option value='September'>September</option>
                <option value='October'>October</option>
                <option value='November'>November</option>
                <option value='December'>December</option>
            </select>
        </div>
        @error('day')
            {{ $message }}
        @enderror
        @error('month')
            {{ $message }}
        @enderror
        <div class="flex">
            <input type="number" class="side" name="p_day" wire:model="p_day" placeholder="Purge Day" autocomplete="none">
            <select name="p_month" id='p_month' wire:model="p_month">
                <option value=''>--Select Purge Month--</option>
                <option selected value='Janaury'>Janaury</option>
                <option value='February'>February</option>
                <option value='March'>March</option>
                <option value='April'>April</option>
                <option value='May'>May</option>
                <option value='June'>June</option>
                <option value='July'>July</option>
                <option value='August'>August</option>
                <option value='September'>September</option>
                <option value='October'>October</option>
                <option value='November'>November</option>
                <option value='December'>December</option>
            </select>
        </div>
        @error('p_day')
            {{ $message }}
        @enderror
        @error('p_month')
            {{ $message }}
        @enderror
        <div class="flex">
            <select class="side" name="bp_wipe" id='bp_wipe' wire:model="bp_wipe">
                <option value='no'>BP-No</option>
                <option value='yes'>BP-Yes</option>
            </select>
            <select name="rp_wipe" id='rp_wipe' wire:model="rp_wipe">
                <option value='no'>RP-No</option>
                <option value='yes'>RP-Yes</option>
            </select>
        </div>
        @error('bp_wipe')
            {{ $message }}
        @enderror
        @error('rp_wipe')
            {{ $message }}
        @enderror
        <input type="number" name="year" placeholder="Year" wire:model="year">
        @error('year')
            {{ $message }}
        @enderror
        <button type="submit">Submit</button>
        @if (session('wipeDeleteSuccess'))
            <p class="success">{{ session('wipeDeleteSuccess') }}</p>
        @elseif(session('wipeStatusSuccess'))
            <p class="success">{{ session('wipeStatusSuccess') }}</p>
        @endif
    </form>
    <h1 class="title">Wipe & Purge Database</h1>
    <table>
        <tr>
            <th>Wipe Day</th>
            <th>Purge Day</th>
            <th>Blueprints Wipe</th>
            <th>RP Wipe</th>
            <th>Year</th>
            <th>Status</th>
            <th>Delete</th>
        </tr>
        @if ($wipes->count())
            @foreach ($wipes as $wipe)
                <tr>
                    <td>Thursday {{ $wipe->day }}, {{ $wipe->month }}</td>
                    <td>Wednesday {{ $wipe->p_day }}, {{ $wipe->p_month }}</td>
                    <td>@if ($wipe->bp_wipe == 'yes')
                        <i class="fas fa-check"></i>
                    @else
                        <i class="fas fa-times"></i>
                    @endif </td>
                        
                    <td>@if ($wipe->rp_wipe == 'yes')
                        <i class="fas fa-check"></i>
                    @else
                        <i class="fas fa-times"></i>
                    @endif</td>
                    <td>{{ $wipe->year }}</td>
                    <td>
                        <form action="{{ route('wipeStatus', $wipe->id) }}" method="post">
                            @csrf
                            <select name="status" id="status" onchange="this.form.submit()">
                                <option value="{{ $wipe->status }}">{{ $wipe->status }}</option>
                                <option value="pending">Pending</option>
                                <option value="wiped">Wiped</option>
                                <option value="active">Active</option>
                            </select>
                        </form>
                    </td>
                    <td>
                        <form wire:submit.prevent="wipeDelete({{ $wipe->id }})" method="post"><button type="submit">Delete</button></form>
                    </td>
                </tr>
            @endforeach
        @else
        <tr>
            <td>NoData</td>
            <td>NoData</td>
            <td>NoData</td>
            <td>NoData</td>
            <td>NoData</td>
            <td>NoData</td>
            <td>NoData</td>
            <td>NoData</td>
        </tr>
        @endif
    </table>
    <div class="pagination py-3">
        {{ $wipes->links() }}
    </div>
</div>