@extends('layouts.frontend.index')

@section('seo')
    <title>{{ $event->title }} · Grüne Schule</title>
    <meta hid="description" name="description" content="{{ $event->description }}">
@endsection
@section('page-styles')
    <link rel="stylesheet" href="/assets/css/frontend/content/event.css">
@endsection

@section('content')
    <div class="event">
        <div class="container">
            <div class="event__row">
                <div class="event__image">
                    <img src="/assets/img/eco-fest.jpg" alt="">
                </div>
                <div class="event__body">
                    <h1 class="event__title title">
                        {{ $event->title }}
                    </h1>
                    <p class="event__description">
                        {{ $event->description }}
                    </p>
                    <div class="event__content">
                        {{ $event->content }}
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nobis mollitia, harum accusamus
                            labore
                            dolor, molestias sit deserunt cupiditate voluptatibus dolorum placeat repellendus asperiores
                            porro
                            tempore? Quos cumque nesciunt ad.
                            Vitae maxime voluptatum sit nihil, laudantium sed vel doloremque in incidunt hic aspernatur
                            corrupti
                            tenetur excepturi accusantium harum! Architecto velit minus fuga doloribus soluta temporibus
                            dolore!
                            Maiores unde dignissimos animi?</p>
                        <p>Et id soluta modi architecto quas, laudantium facere sunt nesciunt quia blanditiis at hic alias
                            recusandae possimus autem asperiores quibusdam illo deserunt quod facilis totam? Ex aliquid sint
                            beatae
                            voluptas.</p>
                        <p>Vel deserunt saepe amet nam cumque aut quia perferendis rem veritatis doloribus harum, non optio
                            alias
                            quaerat architecto necessitatibus voluptatibus repellendus libero asperiores repellat beatae
                            iure
                            atque
                            quisquam temporibus? At.
                            Corrupti provident optio atque fugit maiores ex eum cum vel vero, esse harum dolore error dicta
                            incidunt, libero eius omnis odio sed quaerat asperiores odit nostrum praesentium? Nulla,
                            voluptatum
                            consequatur?</p>
                        <p>
                            Molestias consequuntur illo eligendi harum aliquid, dicta asperiores soluta, pariatur,
                            repudiandae
                            numquam ut laboriosam. Iusto tempora ratione repellendus fuga facilis suscipit recusandae soluta
                            quos
                            ducimus, velit magni, molestias, perferendis nemo?
                        </p>
                        <p>Fugiat nam iure cumque dolores, non nobis veniam ducimus mollitia at pariatur itaque tempore
                            voluptatum
                            expedita totam, omnis harum est. Autem eius sequi porro! Libero velit aperiam at molestiae
                            natus.
                            Ex dolore cumque voluptatem illo magnam, repudiandae itaque possimus minus non repellendus
                            commodi
                            praesentium maiores quas hic voluptatum pariatur quos quam consectetur aliquid id, aspernatur a.
                            Repellat impedit earum sint?</p>
                        <p>Labore asperiores optio dolore placeat dignissimos, iure ut consequatur non aut id impedit rerum
                            voluptas commodi necessitatibus perspiciatis animi nam harum illo. Laboriosam voluptatum nihil
                            quos
                            dolorem hic dicta autem.</p>
                        <p>Hic repellat eaque ullam aperiam, tempore reiciendis facere neque id sint est quibusdam ad ex
                            vero
                            dolore quos tempora deleniti cumque atque laborum. Hic, officia ipsum ratione repellendus
                            doloremque
                            consectetur.</p>
                    </div>
                </div>
                <div class="event__footer">
                    <div class="event__author">
                        @admin
                    </div>
                    <div class="event__date">
                        {{ $event->created_at->format('jS F Y ') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
