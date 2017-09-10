<form class="form-horizontal" method="POST" action="{{ route('feedback') }}">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('feedback') ? ' has-error' : '' }}">
        <label for="feedback" class="col-md-4 control-label">Your feedback:</label>

        <div class="col-md-6">
            <textarea id="feedback" class="form-control" name="feedback" required2>

            </textarea>

            @if ($errors->has('feedback'))
                <span class="help-block">
                    <strong>{{ $errors->first('feedback') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Send a feedback
            </button>
        </div>
    </div>
</form>