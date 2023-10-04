
<div class="layout__row pb-2 align-items-center" bis_skin_checked="1">
    <div class="layout__col-9 py-0" bis_skin_checked="1">
        {{ $fileName }}
        <span class="float-right">
            <span class="small font-italic" style="display: none;">100%</span>
            <span class="small" style="">
                {{empty($msg) ? $wordCount . ' words' : '' }} <span class="text-danger">{{ $msg }}</span>
            </span>
        </span>
    </div>
    <div class="layout__col-3 py-0" bis_skin_checked="1">
        <small class="float-right" style="">
            <button class="close" onclick="deleteEfile(this)">
                <i class="fa fa-trash" style="font-size: 15px; padding: 5px; color:red"></i>
                <input type="hidden" name="file_words[]" value="{{ $wordCount }}">
            </button>
        </small>
    </div>
    <div class="layout__col-12 py-1" bis_skin_checked="1">
        <div class="progress" style="height: 1px;" bis_skin_checked="1">
            <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="progress-bar"
                style="width: 100%;" bis_skin_checked="1">
            </div>
        </div>
    </div>
</div>
