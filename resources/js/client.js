window.client = {
    article: {
        incrementViews(id) {
            axios.post(`/articles/${id}/increment-num-views`);
        },
        incrementLikes(id) {
            axios.post(`/articles/${id}/increment-num-likes`);
        },
    },
};
