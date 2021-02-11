@extends('layouts.app')

@section('title', 'Mise en garde et conditions d\'utilisation')

@section('description', 'Mise en garde et condition générales d\'utilisation')

@section('content')
    @include('layouts.navbar', ['active' => ''])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full sm:w-3/4 bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-grey-light items-center">
                <h1 class="text-3xl leading-none text-red">Mise en garde et conditions d’utilisation</h1>
            </div>

            <p class="mt-2 tracking-tight font-thin text-sm">Une attention soignée a été apportée à la préparation de l’information contenue dans ce site web, qui provient de diverses sources et est fournie sans frais. Les recommandations contenues sur ce site sont uniquement à titre indicatif. Il est suggéré de les comparer avec d'autres sources bibliographiques. Les auteurs ont fait le maximum afin de s'assurer que les renseignements contenus dans les documents sont exacts au moment de leur publication. Ces informations sont fournies « telles quelles », sans représentation, garantie ou conditions, explicites ou implicites, statutaires ou autres, touchant les éléments suivants : qualité, exactitude, intégralité, légalité, fiabilité, efficacité ou caractère approprié à une fin déterminée; accès non interrompu à ce site web ou à ceux auxquels il est relié; utilisation sans erreur de ce site web ou de ceux auxquels il est relié; et absence de virus informatique, d’autres composantes nuisibles de données ou d’informations corrompues sur ce site web et ceux auxquels il est relié.</p>

            <p class="mt-2 tracking-tight font-thin text-sm">RxCirrhose et ses fournisseurs de contenu (notamment les médecins et pharmaciens qui fournissent de l’information sur ce site web) n’ont aucune responsabilité, directe ou indirecte, corrélative, contingente, spéciale ou incidente, reliée ou connexe aux informations présentées sur ce site web ou ceux auxquels il est relié ou à leur utilisation fondée sur un bris de contrat ou un délit civil (y compris la négligence), ce qui comprend les infractions aux droits de propriété, la responsabilité objective, la violation de garantie, le défaut de fins essentielles, les contraventions essentielles au contrat, les contraventions à un terme fondamental ou autre, même après notification de la possibilité correspondante.</p>

            <p class="mt-2 tracking-tight font-thin text-sm">L’information fournie sur ce site web est destinée à des fins d’information seulement et ne constitue pas une opinion médicale, et ne doit pas être considérée comme fiable de quelque façon. L’information ne vise pas à être intégrale ou détaillée touchant les questions traitées. RxCirrhose ne recommande et n’avalise pas l’utilisation des médicaments ou méthodes de traitement décrites dans ce site web. Les informations contenues dans ce site web ou les sites web auxquels il est relié ne doivent être utilisées que sous la supervision d’un médecin ou d’un autre professionnel ayant les qualifications appropriées.</p>

            <p class="mt-2 tracking-tight font-thin text-sm">Toute personne qui utilise ces informations le fait à ses propres risques et, ce faisant, accepte de dégager RxCirrhose et ses fournisseurs de contenu de tout dommage, responsabilité, perte, blessure, frais et dépenses (notamment les frais et honoraires juridiques) découlant de l’utilisation par cette personne de l’information présentée sur ce site web et sur les sites web auxquels il est relié.</p>

            <p class="mt-2 tracking-tight font-thin text-sm">RxCirrhose n’est pas responsable des dommages ou blessures provoqués notamment, sans en limiter la portée, par tout défaut, inexécution, erreur, omission, interruption, défaut, retard d’application ou de transmission, virus informatique ou défaillance de ligne. RxCirrhose ou ses fournisseurs de contenu ne sont pas responsables des dommages ou blessures, notamment, sans en limiter la portée, des dommages spéciaux ou consécutifs pouvant résulter de l’utilisation ou de l’incapacité d’utilisation du matériel sur ce site web, même si RxCirrhose ou un représentant autorisé de RxCirrhose a été informé de la possibilité de ces dommages.</p>

            <p class="mt-2 tracking-tight font-thin text-sm">En accédant à ce site web et à l’une ou l’autre de ses pages, vous acceptez d’être lié par les conditions décrites ci-haut. Si vous n’êtes pas d’accord avec ces conditions, veuillez quitter immédiatement ce site web et ne pas consulter d’autre page. Des changements peuvent être apportés périodiquement à ce site web, aux présentes conditions et à l’information présentée sans préavis. Vous avez la responsabilité de revoir ces conditions chaque fois que vous consultez ce site web. L’utilisation continue de ce site web indique que vous acceptez d’être lié par ces conditions et les changements qui y sont apportés. Les références faites à RxCirrhose dans les présentes conditions comprennent son équipe (Raphaël Coutu, Victor Ferreira, Alexandre Mathieu et Julien Bissonnette) et autres représentants ou collaborateurs.</p>

        </div>
    </div>
    @include('layouts.footer')
@endsection
