        <div class="col-2 mb-2 mt-2">
            <div class="content"><a href="./viewCard/{$allCards->id}">
                <div class="content-overlay"></div> <img class="content-image" src="./{if !isset($allCards->image)}img/cards/0.jpg{else}{$allCards->image}{/if}">
                    <div class="content-details fadeIn-bottom">
                        <h4 class="text-white text-shadow">{$allCards->name}</h4>
                        <p class="text-white text-shadow"><i class="fa fa-map-marker"></i>{$allCards->expansion}</p>
                    </div>
            </a></div>
        </div>
</body>

</html>