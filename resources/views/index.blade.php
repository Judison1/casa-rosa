<x-layouts.public-layout>
    <section class="jumbotron w-full">
        <div class="px-4 py-8 flex flex-col xl:flex-row items-center justify-center max-w-7xl mx-auto gap-4 h-[60vh]">
            <div class="grow w-full xl:w-2/3 text-center gap-4 flex flex-col items-center justify-center">
                <h2 class="text-3xl xl:text-7xl font-bold text-rose-200">A Nossa Luta é Todo Dia</h2>
                <h3 class="text-xl xl:text-3xl font-semibold text-rose-300">Casa de Apoio a Mulher com Câncer - Santarém
                    - PA</h3>
            </div>
            <img src={{ asset('img/woman-cancer.svg') }} class="w-96 xl:w-1/3" alt="Mulher com câncer">
        </div>
    </section>

    <section id="parceiros" class="bg-white h-[30vh]">
        <div class="w-full flex items-center justify-between max-w-7xl mx-auto flex-col gap-4 px-4 py-8">
            <h3 class="text-center text-xl font-semibold xl:text-2xl text-rose-500">Parceiros</h3>
            <div class="flex gap-4 w-full p-4 items-center justify-center">
                <p>Em Breve</p>
            </div>
        </div>
    </section>
    <section id="a-casa">
        <div class="w-full flex items-center justify-between max-w-7xl mx-auto flex-col gap-4 px-4 py-8">
            <h3 class="text-center text-xl font-semibold xl:text-2xl text-rose-500">A Casa Rosa</h3>
            <div class="p-4 flex w-full flex-col xl:flex-row items-center justify-center max-w-7xl mx-auto gap-4">
                <div class="grow w-full xl:w-1/2">
                    <p class="text-justify text-xl">A Casa Rosa é uma instituição sem fins lucrativos que tem como objetivo
                        acolher mulheres com câncer em tratamento na cidade de Santarém - PA. A Casa Rosa foi fundada em
                        [ano] e desde então tem ajudado mulheres a enfrentar o câncer com mais dignidade e amor.</p>
                </div>
                <img src={{ asset('img/cancer-cuate.svg') }} class="w-96 xl:w-1/2" alt="Mulher com câncer">
            </div>
        </div>
    </section>
    <section id="seja-doador" class="bg-rose-500">
        <div class="w-full flex items-center justify-between max-w-7xl mx-auto flex-col gap-4 px-4 py-8">
            <h3 class="text-center text-xl font-semibold xl:text-2xl text-white">Seja um doador</h3>
            <div class="p-4  w-full grid grid-cols-1 xl:grid-cols-2 items-center justify-center max-w-7xl mx-auto gap-4 h-[60vh]">
                <div>
                    <img src={{ asset('img/cancer-awareness-bro.svg') }} class="w-96 xl:w-4/5 mx-auto" alt="Mulher com câncer">
                </div>

                <div class="grow w-full">
                    <p>Em Breve</p>
                </div>
            </div>
        </div>
    </section>

    <section id="seja-voluntario" class="bg-white ">
        <div class="w-full flex items-center justify-between max-w-7xl mx-auto flex-col gap-4 px-4 py-8">
            <h3 class="text-center text-xl font-semibold xl:text-2xl text-rose-500">Seja um voluntário</h3>
            <div class="p-4 flex w-full flex-col xl:flex-row items-center justify-center max-w-7xl mx-auto gap-4 ">
                <div class="grow w-full xl:w-1/2">
                    <form method="POST" action="{{-- {{ route('volunteers.store') }} --}}" class="flex flex-col gap-4">
                        @csrf
                        <label for="name" class="text-rose-500">Nome</label>
                        <input type="text" name="name" id="name" class="p-4 border border-rose-500 rounded-lg"
                            placeholder="Nome Completo" required>
                        <label for="email" class="text-rose-500">E-mail</label>
                        <input type="email" name="email" id="email" class="p-4 border border-rose-500 rounded-lg"
                            placeholder="E-mail">
                        <label for="phone" class="text-rose-500">Telefone</label>
                        <input type="tel" name="phone" id="phone" class="p-4 border border-rose-500 rounded-lg"
                            placeholder="Telefone/Celular">
                        <button type="submit"
                            class="p-4 bg-rose-500 text-white rounded-lg hover:bg-rose-600">Enviar</button>
                    </form>
                </div>
                <img src={{ asset('img/cancer-amico.svg') }} class="w-96 xl:w-1/2" alt="Mulher com câncer">
            </div>
        </div>
    </section>
    <section id="fale-conosco" class=" bg-rose-500">
        <div class="w-full flex items-center justify-between max-w-7xl mx-auto flex-col gap-4 px-4 py-8">
            <h3 class="text-center text-xl font-semibold xl:text-2xl text-white">Fale Conosco</h3>
            <div class="grid grid-cols-1 w-full xl:grid-cols-2 gap-8 p-4 items-center justify-center">
                <div class="text-white">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2584.797576216148!2d-54.71340602812269!3d-2.4423959975262757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9288f9f4359831c7%3A0x7569ac6e1eafeae7!2sCASA%20ROSA!5e1!3m2!1spt-BR!2sbr!4v1742212357394!5m2!1spt-BR!2sbr"
                        width="100%" style="border:0;" class="mb-4 rounded-lg h-80 xl:h-[500px]" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p><strong>Endereço:</strong> R. Xingu, 264 - Interventória, Santarém - PA, 68020-140</p>
                    <p><strong>E-mail:</strong> <a
                            href="mailto:casarosasantarem@gmail.com">casarosasantarem@gmail.com</a></p>
                    <p><strong>Contato:</strong> <a href="tel:093991216902">(093) 99121-6902</a></p>
                </div>
                <div class="grow">
                    <form method="POST" action="{{-- {{ route('contact.store') }} --}}" class="flex flex-col gap-4">
                        @csrf
                        <label for="name" class="text-white">Nome</label>
                        <input type="text" name="name" id="name" class="p-4 border border-white bg-white rounded-lg"
                            placeholder="Nome Completo" required>
                        <label for="email" class="text-white">E-mail</label>
                        <input type="email" name="email" id="email" class="p-4 border border-white bg-white rounded-lg"
                            placeholder="E-mail">
                        <label for="phone" class="text-white">Telefone</label>
                        <input type="tel" name="phone" id="phone" class="p-4 border border-white bg-white rounded-lg"
                            placeholder="Telefone/Celular">
                        <label for="message" class="text-white">Mensagem</label>
                        <textarea name="message" id="message" rows="5"
                            class="p-4 border border-white bg-white rounded-lg" placeholder="Mensagem"
                            required></textarea>
                        <button type="submit"
                            class="p-4 bg-rose-100 text-rose-500 rounded-lg hover:bg-rose-200">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.public-layout>
