<div class="configration tabcontent" id="configration">
    <h1 class="title">Server Configrations</h1>
    <form wire:submit.prevent="storePost" method="post">
        @if (session('postSuccess'))
            <p class="success">{{ session('postSuccess') }}</p>
        @endif
        <div class="flex">
            <input type="text" wire:model="title" class="side" name="title" placeholder="Title" autocomplete="none">
            <input type="text" wire:model="command" name="command" placeholder="Commands (/skinbox,/tpr)" autocomplete="none">
        </div>
        <textarea name="post" wire:model="post" id="post" cols="30" rows="7" placeholder="Message!"></textarea>
        <button type="submit">Submit</button>
    </form>
    <h1 class="title">Commands Database</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Commands</th>
            <th>Post</th>
            <th>Delete</th>
        </tr>

        @if ($posts->count())
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->command }}</td>
                    <td>{{ $post->post }}</td>
                    <td>
                        <form wire:submit.prevent="deletePost({{ $post->id }})" method="post"><button type="submit">Delete</button></form>
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
            </tr>
        @endif
    </table>
    <div class="pagination py-3">
        {{ $posts->links() }}
    </div>
</div>