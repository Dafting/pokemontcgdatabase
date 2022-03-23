        <div class="col-2 mb-2 mt-2">
            <div class="content"><a href="{BASE_URL}byExpansion/{$shownExpansion->id}">
                <div class="content-overlay"></div> <img class="content-image" src="{BASE_URL}{if !isset($shownExpansion->image)}img/expansions/0.jpg{else}{$shownExpansion->image}{/if}">
                    <div class="content-details fadeIn-bottom">
                        <h4 class="text-white text-shadow">{$shownExpansion->name}</h4>
                    </div>
            </a></div>
        </div>