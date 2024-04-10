<script setup>
    import { ref } from 'vue';
    import { usePage, Link } from '@inertiajs/vue3';
    import { DownOutlined } from '@ant-design/icons-vue';
    const usePageRes = usePage();
    const openAguasModal = ref(false),
          openAlimentosModal = ref(false),
          openResiduosModal = ref(false);
</script>
<template>
    <header class="flex justify-between px-16 xl:px-28 items-center bg-slate-100 py-1">
        <div class="flex items-center">
            <img 
                :src="usePageRes.props.images.logoUrl" 
                alt="logo"
                class="h-12 xl:h-16 w-12 xl:w-16 rounded-full bg-white">
            <h1 class="ml-3 font-slab font-semibold text-emerald-700">
                Laboratorio de Analisis Industriales del Guadiana S. A. de C. V.
            </h1>
        </div>
        <nav>
            <ul class="list-none flex">
                <li class="text-teal-700 font-medium mr-4">
                    <Link 
                        href="/nosostros" 
                        class="text-inherit no-underline">
                        Nosotros
                    </Link>
                </li>
                <li class="text-teal-700 font-medium">
                    <a-dropdown>
                        <span>Servicios <DownOutlined :style="{fontSize: '0.75rem'}"/></span>
                        <template #overlay>
                            <a-menu>
                                <a-menu-item>
                                    <p @click="openAguasModal = true">Servicios Aguas</p>
                                </a-menu-item>
                                <a-menu-item>
                                    <p @click="openAlimentosModal = true">Servicios Alimentos</p>
                                </a-menu-item>
                                <a-menu-item>
                                    <p @click="openResiduosModal = true">Servicios Residuos</p>
                                </a-menu-item>
                            </a-menu>
                        </template>
                    </a-dropdown>
                </li>
            </ul>
        </nav>
    </header>
    <a-modal 
        v-model:open="openAguasModal"
        :cancel-button-props="{class: 'hidden'}"
        :ok-button-props="{innerText: 'Cerrar'}"
        @ok="openAguasModal=false"
        width="886px">
        <h4 class="text-royal-blue font-slab font-semibold text-xl mb-2">Análisis de aguas</h4>
        <hr class="border-slate-300">
        <h4 class="text-royal-blue font-slab font-semibold text-xl mb-2 mt-2">Mediciones directas y Fisicoquímicas</h4>
        <hr class="border-slate-300">
        <table class="border-[1px] border-gray-200 rounded-md mt-3 w-full font-roboto">
            <thead>
                <tr>
                    <th class="border-[1px] border-gray-200 py-2 px-4 font-semibold text-left">Prueba</th>
                    <th class="border-[1px] border-gray-200 py-2 px-4 font-semibold text-left">Norma y/o Metodo de Referencia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
            </tbody>
        </table>
    </a-modal>
    <a-modal 
        v-model:open="openAlimentosModal"
        :cancel-button-props="{class: 'hidden'}"
        :ok-button-props="{innerText: 'Cerrar'}"
        @ok="openAlimentosModal=false"
        width="886px">
        <h4 class="text-royal-blue font-slab font-semibold text-xl mb-2">Análisis de Alimentos</h4>
        <hr class="border-slate-300">
        <h4 class="text-royal-blue font-slab font-semibold text-xl mb-2 mt-2">Mediciones directas y Fisicoquímicas</h4>
        <hr class="border-slate-300">
        <table class="border-[1px] border-gray-200 rounded-md mt-3 w-full font-roboto">
            <thead>
                <tr>
                    <th class="border-[1px] border-gray-200 py-2 px-4 font-semibold text-left">Prueba</th>
                    <th class="border-[1px] border-gray-200 py-2 px-4 font-semibold text-left">Norma y/o Metodo de Referencia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
            </tbody>
        </table>
    </a-modal>
    <a-modal 
        v-model:open="openResiduosModal"
        :cancel-button-props="{class: 'hidden'}"
        :ok-button-props="{innerText: 'Cerrar'}"
        @ok="openResiduosModal=false"
        width="886px">
        <h4 class="text-royal-blue font-slab font-semibold text-xl mb-2">Análisis de Residuos</h4>
        <hr class="border-slate-300">
        <h4 class="text-royal-blue font-slab font-semibold text-xl mb-2 mt-2">Mediciones directas y Fisicoquímicas</h4>
        <hr class="border-slate-300">
        <table class="border-[1px] border-gray-200 rounded-md mt-3 w-full font-roboto">
            <thead>
                <tr>
                    <th class="border-[1px] border-gray-200 py-2 px-4 font-semibold text-left">Prueba</th>
                    <th class="border-[1px] border-gray-200 py-2 px-4 font-semibold text-left">Norma y/o Metodo de Referencia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en aguas residuales.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NMX-AA-003-1980</td>
                </tr>
                <tr>
                    <td class="border-[1px] border-gray-200 py-2 px-4">Muestreo en agua potable.</td>
                    <td class="border-[1px] border-gray-200 py-2 px-4">NOM-230-SSA1-2002</td>
                </tr>
            </tbody>
        </table>
    </a-modal>
</template>
