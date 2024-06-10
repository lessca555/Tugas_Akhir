<div class="flex">

    @role('admin')
    <div class="bg-white">

    </div>
    @elserole('user')
    <div>
        <h1>user</h1>
    </div>
    @endrole

</div>
