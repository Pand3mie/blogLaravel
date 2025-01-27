@extends('layout.app')

@section('content')
<div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
    <main class="mdl-layout__content">
        <div class="demo-blog__posts mdl-grid">
            <div class="logosite"></div>
        </div>
        <div class="demo-blog__posts mdl-grid">
            <div class="mdl-card coffee-pic mdl-cell mdl-cell--8-col z-depth-3">
                <div class="mdl-card__media mdl-color-text--grey-50">
                    <h3>
                        <a href="{{ route('game_list') }}">Liste des jeux</a>
                    </h3>
                </div>
                <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
                    <div class="minilogo"></div>
                    <div>
                        <strong>Dernière mise à jour</strong>
                       
                        <span>il y a {{ $interval }}

                            @if ($interval <= 1)                            
                                jour
                            @else
                                jours
                             @endif
                        </span>
                    </div>
                </div>
            </div>
            <div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop z-depth-3">
                <a href="#" class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent">
                    <i class="material-icons mdl-color-text--white" role="presentation">add</i>
                    <span class="visuallyhidden">add</span>
                </a>
                <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600"></div>
                <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
                    <div>
                        <strong>Gestion</strong>
                    </div>
                    <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="menubtn">
                        <li class="mdl-menu__item">
                            <a href="#">Auteurs</a>
                        </li>
                        <li class="mdl-menu__item">
                            <a href="#">Editeurs</a>
                        </li>
                        <li class="mdl-menu__item">
                            <a href="#">Genres</a>
                        </li>
                        <li class="mdl-menu__item">
                            <a href="#!">A propos</a>
                        </li>
                    </ul>
                    <button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">more_vert</i>
                        <span class="visuallyhidden">show menu</span>
                    </button>
                </div>
            </div>
            <div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col z-depth-3">
                <div class="mdl-card__media mdl-color-text--grey-50">
                    <h3>
                        <a href="entry.html">Jeu du jour</a>
                    </h3>
                </div>
                <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
                    Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
                </div>
                <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
                    <div class="minilogo"></div>
                    <div>
                        <strong>The Newist</strong>
                        <span>2 days ago</span>
                    </div>
                </div>
            </div>
            <div class="mdl-card amazing mdl-cell mdl-cell--12-col z-depth-3">
                <div class="mdl-card__title mdl-color-text--grey-50">
                    <h3 class="quote">
                        <a href="entry.html">I couldn’t take any pictures but this was an amazing thing…</a>
                    </h3>
                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                    Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
                </div>
                <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
                    <div class="minilogo"></div>
                    <div>
                        <strong>The Newist</strong>
                        <span>2 days ago</span>
                    </div>
                </div>
            </div>
            <div class="mdl-card shopping mdl-cell mdl-cell--12-col z-depth-3">
                <div class="mdl-card__media mdl-color-text--grey-50">
                    <h3>
                        <a href="entry.html">Shopping</a>
                    </h3>
                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                    Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
                </div>
                <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
                    <div class="minilogo"></div>
                    <div>
                        <strong>The Newist</strong>
                        <span>2 days ago</span>
                    </div>
                </div>
            </div>
        </div>
        <footer class="mdl-mini-footer">
            <div class="mdl-mini-footer--left-section">
                <button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
                    <span class="visuallyhidden">Twitter</span>
                </button>
                <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
                    <span class="visuallyhidden">Facebook</span>
                </button>
                <button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
                    <span class="visuallyhidden">Google Plus</span>
                </button>
            </div>
            <div class="mdl-mini-footer--right-section">
                <button class="mdl-mini-footer--social-btn social-btn__share">
                    <i class="material-icons" role="presentation">share</i>
                    <span class="visuallyhidden">share</span>
                </button>
            </div>
        </footer>
    </main>
    <div class="mdl-layout__obfuscator"></div>
</div>
<script>
    Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function (el) {
        var link = el.querySelector('a');
        if (! link) {
            return;
        }
        var target = link.getAttribute('href');
        if (! target) {
            return;
        }
        el.addEventListener('click', function () {
            location.href = target;
        });
    });
</script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
@endsection