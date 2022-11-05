<section class="content">
    <div class="container">
        <div class="tabs-content" x-data="{ open: false }">
            <button x-on:click="open=!open" class="expand">Users Database <span><i :class="{ 'fas fa-caret-up' : open , 'fas fa-caret-down' : !open}"></i></span></button>
            <div x-show="open" x-transition  class="opened">
                @livewire('userdata')
            </div>
        </div>

        <div class="tabs-content" x-data="{ open: false }">
            <button x-on:click="open=!open" class="expand">Ranking Database <span><i :class="{ 'fas fa-caret-up' : open , 'fas fa-caret-down' : !open}"></i></span></button>
            <div x-show="open" x-transition  class="opened">
                @livewire('rankings')
            </div>
        </div>

        <div class="tabs-content" x-data="{ open: false }">
            <button x-on:click="open=!open" class="expand">Posts Database <span><i :class="{ 'fas fa-caret-up' : open , 'fas fa-caret-down' : !open}"></i></span></button>
            <div x-show="open" x-transition  class="opened">
                @livewire('post')
            </div>
        </div>

        <div class="tabs-content" x-data="{ open: false }">
            <button x-on:click="open=!open" class="expand">Wipe Database <span><i :class="{ 'fas fa-caret-up' : open , 'fas fa-caret-down' : !open}"></i></span></button>
            <div x-show="open" x-transition  class="opened">
                @livewire('wipe')
            </div>
        </div>

        <div class="tabs-content" x-data="{ open: false }">
            <button x-on:click="open=!open" class="expand">Rules Database <span><i :class="{ 'fas fa-caret-up' : open , 'fas fa-caret-down' : !open}"></i></span></button>
            <div x-show="open" x-transition  class="opened">
                @livewire('rule')
            </div>
        </div>
    </div>
</section>