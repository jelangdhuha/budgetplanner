<x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pencatatan Pendapatan dan Pengeluaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('transactions.store') }}">
                        
                        @csrf

                        <div class="mb-4">
                            <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Jumlah') }}
                            </label>
                            <input id="amount" type="number" class="form-input @error('amount') border-red-500 @enderror" name="amount" value="{{ old('amount') }}" required autofocus>

                            @error('amount')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="type" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Jenis') }}
                            </label>
                            <select id="type" class="form-select @error('type') border-red-500 @enderror" name="type" required>
                                <option value="income" {{ old('type') === 'income' ? 'selected' : '' }}>Pendapatan</option>
                                <option value="expense" {{ old('type') === 'expense' ? 'selected' : '' }}>Pengeluaran</option>
                            </select>

                            @error('type')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="btn"></div>
                    <button type="submit" class="btn btn-secondary">
                        {{__('Simpan')}}
                    </button>
                        


                        {{-- <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Simpan') }}
                            </button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
</x-app-layout>

