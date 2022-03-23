{literal}
<section id="commentsApp">
    <h3> {{ title }} </h3>
    <button type="button" v-on:click="firstPosted()"class="btn btn-primary mb-2">Por antigüedad</button>
    <button type="button" v-on:click="ascOrder(cardId)" class="btn btn-primary mb-2">Orden Asc.</button>
    <button type="button" v-on:click="descOrder(cardId)" class="btn btn-primary mb-2">Orden Desc.</button>
    <h5>Filtrar por puntaje:</h5>
    <button type="button" v-on:click="byScore(cardId, 1)" class="btn btn-primary mb-2">1★</button>
    <button type="button" v-on:click="byScore(cardId, 2)" class="btn btn-primary mb-2">2★</button>
    <button type="button" v-on:click="byScore(cardId, 3)" class="btn btn-primary mb-2">3★</button>
    <button type="button" v-on:click="byScore(cardId, 4)" class="btn btn-primary mb-2">4★</button>
    <button type="button" v-on:click="byScore(cardId, 5)" class="btn btn-primary mb-2">5★</button>
    <div class="card" v-for="comment in comments">
        <div class="card-body">
            <strong>{{ comment.score }}★</strong>
            <span>{{ comment.comment }}</span>
            <button {/literal}{if ($smarty.session.isAdmin == 1)} class="btn btn-sm btn-danger"{else} class="d-none" disabled{/if}{literal} v-on:click="deleteComment(comment.id)">Borrar</button>
        </div>
    </div>
</section>
<section {/literal}{if !isset($smarty.session.username)} class="d-none"{/if}{literal}>
    <h3> Agrega un comentario </h3>
    <form @submit.prevent="addComment" id="form">
        <input type="text" v-model="comment.comment" placeholder="Comment">
        <select v-model="comment.score" name="score" placeholder="Puntaje ★" data-toggle="tooltip" data-placement="top" title="Puntaje">
            <option value="1">1★</option>
            <option value="2">2★</option>
            <option value="3">3★</option>
            <option value="4">4★</option>
            <option value="5">5★</option>
        </select>
        <input type="hidden" id="cardId" v-model="comment.cardId" value="{/literal}{$cardId}{literal}">
        <button class="btn btn-sm btn-primary" type="submit">Add</button>
    </form>
</section>
{/literal}
		</div>
	</div>
</div>
