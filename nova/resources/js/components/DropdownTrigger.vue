<template>
    <a @click="handleClick" class="dropdown-trigger h-9 flex items-center cursor-pointer select-none">
        <slot />

        <svg
            class="ml-2"
            width="10px"
            height="6px"
            viewBox="0 0 10 6"
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
        >
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g
                    id="04-user"
                    transform="translate(-385.000000, -573.000000)"
                    fill="#35393C"
                    fill-rule="nonzero"
                >
                    <path
                        d="M393.292893,573.292893 C393.683418,572.902369 394.316582,572.902369 394.707107,573.292893 C395.097631,573.683418 395.097631,574.316582 394.707107,574.707107 L390.707107,578.707107 C390.316582,579.097631 389.683418,579.097631 389.292893,578.707107 L385.292893,574.707107 C384.902369,574.316582 384.902369,573.683418 385.292893,573.292893 C385.683418,572.902369 386.316582,572.902369 386.707107,573.292893 L390,576.585786 L393.292893,573.292893 Z"
                        id="Path-2-Copy"
                    />
                </g>
            </g>
        </svg>
    </a>
</template>

<script>
export default {
    props: {
        handleClick: Function,
    },
}
</script>
