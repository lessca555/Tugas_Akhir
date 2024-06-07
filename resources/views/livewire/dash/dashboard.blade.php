<div class="flex flex-col justify-center items-center">

    @role('admin')
    <div class="bg-white p-5 h-[100vh]">
        <h1>admin</h1>
    </div>
    @elserole('user')
    <div>
        <h1>user</h1>
    </div>
    @endrole

</div>
