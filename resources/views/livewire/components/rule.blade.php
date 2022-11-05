<div class="rules tabcontent" id="rules">
    <h1 class="title">Server Rules</h1>
    <form wire:submit.prevent="storeRule" method="post">
        @if (session('ruleSuccess'))
            <p class="success">{{ session('ruleSuccess') }}</p>
        @endif
        <textarea name="reason" id="reason" wire:model="reason" cols="30" rows="7" placeholder="Ban Reason"></textarea>
        <select name="period" id='period' wire:model="period">
            <option value='' selected>--Select The Period--</option>
            <option value='permanent'>Permanent</option>
            <option value='not a ban'>Not a Ban</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    <h1 class="title">Rules Database</h1>
    <table>
        <tr>
            <th>Reson</th>
            <th>Period</th>
            <th>Delete</th>
        </tr>
        @if ($rules->count())
        @foreach ($rules as $rule)
        <tr>
            <td>{{ $rule->reason }}</td>
            <td>{{ $rule->period }}</td>
            <td>
                <form wire:submit.prevent="deleteRule({{ $rule->id }})" method="post"><button type="submit">Delete</button></form>
            </td>
        </tr>
        @endforeach
        @else
            <tr>
                <td>No Data</td>
                <td>No Data</td>
                <td>No Data</td>
                <td>No Data</td>
            </tr>
        @endif
    </table>
    <div class="pagination py-3">
        {{ $rules->links() }}
    </div>
</div>