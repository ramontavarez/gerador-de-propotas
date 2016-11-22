<div class="message-box message-box-success animated fadeIn 
    @if(session()->has('success'))
    open
    @endif" id="message-box-success">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-check"></span> Success</div>
            <div class="mb-content">
                <p>{{ session()->get('success') }}</p>
            </div>
            <div class="mb-footer">
                <button class="btn btn-default btn-lg pull-right mb-control-close">Close</button>
            </div>
        </div>
    </div>
</div>