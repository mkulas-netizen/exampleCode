<!-- Modal -->
<div class="modal fade" id="addAuthor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('data.create_author') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('author.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">{{ __('data.name') }}:</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                               required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="surname">{{ __('data.surname') }}:</label>
                        <input type="text" name="surname" id="surname"
                               class="form-control @error('surname') is-invalid @enderror" required>

                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('data.close') }}</button>
                    <button type="submit" class="btn btn-success">{{ __('data.add_author') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
