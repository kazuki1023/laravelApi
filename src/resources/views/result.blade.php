<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Result') }}
        </h2>
    </x-slot>
    <div class="relative overflow-x-auto flex justify-center w-full pt-4">
        <table class="text-sm text-left text-gray-500 dark:text-gray-400 w-[900px]">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        商品名
                    </th>
                    <th scope="col" class="px-6 py-3">
                        値段
                    </th>
                    <th scope="col" class="px-6 py-3">
                        レビュー平均
                    </th>
                    <th scope="col" class="px-6 py-3">
                        レビュー数
                    </th>
                    <th scope="col" class="px-6 py-3">
                        詳細
                    </th>
                </tr>
            </thead>
            <tbody>
              @foreach($items as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-3 font-medium text-gray-900  dark:text-white w-[300px] ">
                      {{ $item["name"] }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item["price"] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item["reviewAverage"]}}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item["reviewCount"]}}
                    </td>
                    <td class="px-6 py-4">
                      <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 " onclick="location.href='{{ route('detail' ,['id' => $item['itemCode']])}}'">詳細</button>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
