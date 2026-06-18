//
window.telegramApp = () => ({
    selectedChat: null,

    chats: [],

    messages: [],

    search: '',

    selectChat(chat) {
        this.selectedChat = chat;
    },

    sendMessage() {

    }
});