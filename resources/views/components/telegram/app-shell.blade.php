<div
    x-data="telegramApp()"
    class="flex h-screen w-screen overflow-hidden bg-[#0E0E10]"
>

    <!-- PRIMARY SIDEBAR -->
    <x-telegram.primary-sidebar />

    <!-- SECONDARY SIDEBAR -->
    <x-telegram.secondary-sidebar />

    <!-- DRAWER PANEL -->
    <x-telegram.drawer-panel />

    <!-- CHAT WINDOW -->
    <x-telegram.chat-window />

    <!-- RIGHT INFO SIDEBAR -->
    <x-telegram.right-sidebar />

</div>

<script>
function telegramApp() {
    return {
        drawerOpen: false,
        drawerType: 'settings',
        rightSidebarOpen: true,
        activeMenu: 'messages',

        openDrawer(type) {
            this.drawerType = type
            this.drawerOpen = true
        },

        closeDrawer() {
            this.drawerOpen = false
        },

        toggleRightSidebar() {
            this.rightSidebarOpen = !this.rightSidebarOpen
        }
    }
}
</script>