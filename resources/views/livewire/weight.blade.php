<div class="card">
    <div class="card-header">
        SN与重量绑定
    </div>
    <div class="card-body">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <form class="pb-3" wire:submit.prevent="store" x-data>
            <div class="form-group">
                <label for="sn">SN</label>
                <input type="text" class="form-control @error('sn') is-invalid @enderror" id="sn" wire:model.defer="sn"
                       x-on:input="$event.target.classList.remove('is-invalid')" autofocus required>
                @error('sn')
                <span class="invalid-feedback">
    <strong>{{ $message }}</strong>
</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="weight">重量</label>
                <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight"
                       wire:model.defer="weight" required>
                @error('weight')
                <span class="invalid-feedback">
    <strong>{{ $message }}</strong>
</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">确定</button>
        </form>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">序号</th>
                    <th scope="col">SN</th>
                    <th scope="col">重量</th>
                    <th scope="col">添加时间</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($weights as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->sn }}</td>
                        <td>{{ $item->weight }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $weights->links() }}
    </div>
</div>
