<div x-data="{
    toastList: [],
    addToast(title, message, type, id) {
        this.toastList.unshift({
            id: id,
            title: title,
            message: message,
            type: type,
        });
        setTimeout(() => {
            this.removeToast(id);
        }, 5000);
    },
    removeToast(id) {
        this.toastList = this.toastList.filter(item => item.id !== id);
    }
}"
    x-on:toast.window="addToast($event.detail.title,$event.detail.message,$event.detail.type,Symbol());"
    class="m-auto absolute top-2 right-2 space-y-2  w-full sm:w-80">
    <template x-for="(toast,index) in toastList" :key="toast.id">
        <div x-data="{ open: false }" x-init="$nextTick(() => { open = true });
        setTimeout(() => { open = false }, 4000);" x-show="open"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="transform translate-x-full "
            x-transition:enter-end="transform  translate-x-0" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="transform translate-x-0 " x-transition:leave-end="transform translate-x-full "
            x-bind:class="{
                ' text-green-700': toast.type === 'success',
                ' text-red-700': toast.type === 'error',
                ' text-blue-700': toast.type === 'info',
                ' text-yellow-700': toast.type === 'warning',
            }"
            class="bg-white
              rounded-lg relative border  p-3 shadow-lg">
            <div class="flex flex-row ">
                <div class="px-2">
                    <template x-if="toast.type==='success'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 ">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </template>
                    <template x-if="toast.type==='error'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                        </svg>
                    </template>
                    <template x-if="toast.type==='warning'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                    </template>
                    <template x-if="toast.type==='info'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                    </template>
                </div>
                <div class="ml-2 w-full">
                    <div class="flex justify-between items-center w-full">
                        <div class="font-semibold" x-text="toast.title"></div>
                        <button
                            x-on:click="
                              open = false;
                              setTimeout(() => { removeToast(toast.id) }, 1000);
                          "
                            class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <span class="block text-gray-500" x-text="toast.message"></span>
                </div>
            </div>
        </div>
    </template>
</div>
