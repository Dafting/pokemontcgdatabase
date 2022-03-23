const API_URL_BYCARD = "/pokemontcgdatabase/api/commentsByCard";
const API_URL_COMMENTS = "/pokemontcgdatabase/api/comments";

let app = new Vue({  
    el: "#commentsApp",
    data: {
        title: "Comentarios de usuarios",
        score: "Calificación:",
        comments: [],
        subtitle: "Pruebita",
        cardId: "",
    },
    methods: {
        deleteComment: function (id) {
            deleteComment(id)
        },
        ascOrder: function (id_card) {
            sortComments(id_card, 'ascOrder')
        },
        descOrder: function (id_card) {
            sortComments(id_card, 'descOrder')
        },
        firstPosted: function () {
            showComments() 
        },
        byScore: function(id_card, score) {
            filterComments(id_card, score)
        }
    }
})

let form = document.querySelector("#form");
form.addEventListener('submit', addComment);

let id = document.querySelector("#cardId");

async function showComments() {
   
    try {
        let response = await fetch(API_URL_BYCARD + `/${form.children[2].value}`);
        let newComments = await response.json();
        app.cardId = form.children[2].value;
        app.comments = newComments;
    }
    catch (e) {
        console.log(e);
    }
}

showComments();

async function addComment(e) {
    e.preventDefault();
    let data = new FormData(form);
    let comment = {
        cardId: form.children[2].value,
        comment: form.children[0].value,
        score: form.children[1].value,
    }

    console.log(comment);

    try {
        let response = await fetch(API_URL_COMMENTS, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },

            body: JSON.stringify(comment),
        });
        
        if (response.ok) {
            let data = await response.json();
            app.comments.push(data[0]);
           
        }
    } catch (e) {
        console.log(e)
    }
}

async function deleteComment(id) {
    try {
        let response = await fetch(API_URL_COMMENTS + `/${id}`, {
            "method": "DELETE",
        });
        if (response.status == 201) {
            console.log('Comment deleted successfully!');
        }
    }
    catch (e) {
        console.log(e);
    }
    showComments();
}

async function filterComments(id_card, score) {
    try {
        let response = await fetch(API_URL_BYCARD + `/${id_card}` + `/filterByScore` + `/${score}`);
        let filtered = await response.json();
        console.log(filtered);
        app.comments = filtered;
    }
    catch (e) {
        console.log(e);
    }
    }

async function sortComments(id_card, order) {
    if (order == 'ascOrder') {
        try {
            let response = await fetch(API_URL_BYCARD + `/${id_card}` + `/ascOrder`);
            let ordered = await response.json();
            console.log(ordered);
            app.comments = ordered;
        }
        catch (e) {
            console.log(e);
        }
    }
    else if (order == 'descOrder') {
        try {
            let response = await fetch(API_URL_BYCARD + `/${id_card}` + `/descOrder`);
            let ordered = await response.json();
            console.log(ordered);
            app.comments = ordered;
        }
        catch (e) {
            console.log(e);
        }
    }
    else {
        console.log('Something went wrong!');
    }
}


