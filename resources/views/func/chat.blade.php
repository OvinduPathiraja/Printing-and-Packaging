<div class="site-wrap">
    <div class="main-panel">
        <div class="content-wrapper">

<div>
    {{  $message }}
</div>

            <form action="{{url('/chat')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="message">
                <button type="submit">Send</button>
            </form>

        </div>
    </div>

</div>
