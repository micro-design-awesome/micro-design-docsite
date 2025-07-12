<!--
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2025-07-12 17:23:51
 * @LastEditTime: 2025-07-12 18:00:28
 * @LastEditors: xunzhaotech
-->

  <table class="w-full text-sm text-left text-gray-700">
        <!-- 表头 -->
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 sticky-header">
            <tr>
                <th scope="col" class="px-6 py-3 cursor-pointer hover:bg-gray-200">
                    <div class="flex items-center">
                        姓名
                        <button class="ml-1 text-gray-400 hover:text-gray-700">
                            <i class="fas fa-sort"></i>
                        </button>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 cursor-pointer hover:bg-gray-200">
                    <div class="flex items-center">
                        职位
                        <button class="ml-1 text-gray-400 hover:text-gray-700">
                            <i class="fas fa-sort"></i>
                        </button>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 cursor-pointer hover:bg-gray-200">
                    <div class="flex items-center">
                        状态
                        <button class="ml-1 text-gray-400 hover:text-gray-700">
                            <i class="fas fa-sort"></i>
                        </button>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 cursor-pointer hover:bg-gray-200">
                    <div class="flex items-center">
                        入职日期
                        <button class="ml-1 text-gray-400 hover:text-gray-700">
                            <i class="fas fa-sort"></i>
                        </button>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 text-right">操作</th>
            </tr>
        </thead>
        <!-- 表格内容 -->
        <tbody>
            <!-- 行 1 -->
            <tr class="transition bg-white border-b hover:bg-gray-50">
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center w-10 h-10 mr-3 bg-blue-100 rounded-full">
                            <span class="font-medium text-blue-600">张</span>
                        </div>
                        <div>
                            <div class="font-medium text-gray-900">张明</div>
                            <div class="text-xs text-gray-500">zhang@example.com</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <span class="px-2 py-1 text-xs text-blue-800 bg-blue-100 rounded-full">前端工程师</span>
                </td>
                <td class="px-6 py-4">
                    <span class="flex items-center px-2 py-1 text-xs text-green-800 bg-green-100 rounded-full w-fit">
                        <span class="w-2 h-2 mr-2 bg-green-500 rounded-full"></span>
                        在职
                    </span>
                </td>
                <td class="px-6 py-4">2022-03-15</td>
                <td class="px-6 py-4 text-right">
                    <div class="flex justify-end gap-2">
                        <button class="p-2 text-blue-500 rounded-lg hover:bg-blue-50">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="p-2 text-red-500 rounded-lg hover:bg-red-50">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <!-- 行 2 -->
            <tr class="transition bg-white border-b hover:bg-gray-50">
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center w-10 h-10 mr-3 bg-purple-100 rounded-full">
                            <span class="font-medium text-purple-600">李</span>
                        </div>
                        <div>
                            <div class="font-medium text-gray-900">李华</div>
                            <div class="text-xs text-gray-500">li@example.com</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <span class="px-2 py-1 text-xs text-purple-800 bg-purple-100 rounded-full">UI设计师</span>
                </td>
                <td class="px-6 py-4">
                    <span class="flex items-center px-2 py-1 text-xs text-green-800 bg-green-100 rounded-full w-fit">
                        <span class="w-2 h-2 mr-2 bg-green-500 rounded-full"></span>
                        在职
                    </span>
                </td>
                <td class="px-6 py-4">2021-11-20</td>
                <td class="px-6 py-4 text-right">
                    <div class="flex justify-end gap-2">
                        <button class="p-2 text-blue-500 rounded-lg hover:bg-blue-50">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="p-2 text-red-500 rounded-lg hover:bg-red-50">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <!-- 行 3 -->
            <tr class="transition bg-white border-b hover:bg-gray-50">
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center w-10 h-10 mr-3 bg-yellow-100 rounded-full">
                            <span class="font-medium text-yellow-600">王</span>
                        </div>
                        <div>
                            <div class="font-medium text-gray-900">王芳</div>
                            <div class="text-xs text-gray-500">wang@example.com</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <span class="px-2 py-1 text-xs text-yellow-800 bg-yellow-100 rounded-full">产品经理</span>
                </td>
                <td class="px-6 py-4">
                    <span class="flex items-center px-2 py-1 text-xs text-yellow-800 bg-yellow-100 rounded-full w-fit">
                        <span class="w-2 h-2 mr-2 bg-yellow-500 rounded-full"></span>
                        休假中
                    </span>
                </td>
                <td class="px-6 py-4">2020-08-12</td>
                <td class="px-6 py-4 text-right">
                    <div class="flex justify-end gap-2">
                        <button class="p-2 text-blue-500 rounded-lg hover:bg-blue-50">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="p-2 text-red-500 rounded-lg hover:bg-red-50">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <!-- 行 4 -->
            <tr class="transition bg-white border-b hover:bg-gray-50">
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center w-10 h-10 mr-3 bg-red-100 rounded-full">
                            <span class="font-medium text-red-600">赵</span>
                        </div>
                        <div>
                            <div class="font-medium text-gray-900">赵强</div>
                            <div class="text-xs text-gray-500">zhao@example.com</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <span class="px-2 py-1 text-xs text-indigo-800 bg-indigo-100 rounded-full">后端工程师</span>
                </td>
                <td class="px-6 py-4">
                    <span class="flex items-center px-2 py-1 text-xs text-red-800 bg-red-100 rounded-full w-fit">
                        <span class="w-2 h-2 mr-2 bg-red-500 rounded-full"></span>
                        已离职
                    </span>
                </td>
                <td class="px-6 py-4">2023-01-10</td>
                <td class="px-6 py-4 text-right">
                    <div class="flex justify-end gap-2">
                        <button class="p-2 text-blue-500 rounded-lg hover:bg-blue-50">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="p-2 text-red-500 rounded-lg hover:bg-red-50">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <!-- 行 5 -->
            <tr class="transition bg-white border-b hover:bg-gray-50">
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center w-10 h-10 mr-3 bg-green-100 rounded-full">
                            <span class="font-medium text-green-600">陈</span>
                        </div>
                        <div>
                            <div class="font-medium text-gray-900">陈静</div>
                            <div class="text-xs text-gray-500">chen@example.com</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <span class="px-2 py-1 text-xs text-pink-800 bg-pink-100 rounded-full">测试工程师</span>
                </td>
                <td class="px-6 py-4">
                    <span class="flex items-center px-2 py-1 text-xs text-green-800 bg-green-100 rounded-full w-fit">
                        <span class="w-2 h-2 mr-2 bg-green-500 rounded-full"></span>
                        在职
                    </span>
                </td>
                <td class="px-6 py-4">2022-09-05</td>
                <td class="px-6 py-4 text-right">
                    <div class="flex justify-end gap-2">
                        <button class="p-2 text-blue-500 rounded-lg hover:bg-blue-50">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="p-2 text-red-500 rounded-lg hover:bg-red-50">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>