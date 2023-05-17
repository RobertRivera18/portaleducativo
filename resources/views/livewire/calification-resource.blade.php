<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Calificar Recurso
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <span wire:click="$set('open',false)" class="float-right cursor-pointer"><i class="fa fa-times"></i></span>
        </x-slot>
        <x-slot name="content">
            <div class="mb-2">
                <div class="flex flex-col max-w-xl p-8 shadow-sm rounded-xl lg:p-2 dark:bg-gray-900 dark:text-gray-100">
                    <div class="flex flex-col items-center w-full">
                        <h2 class="text-3xl font-semibold text-center">Tu opinión Importa!</h2>
                        <div class="flex flex-col items-center py-4 space-y-3">
                            <span class="text-gray-600">Nos gustaria que califiques este recurso, con el fin de
                                mejorar.</span>

                            {{--Item 1 a valorar--}}
                            <div class="flex space-x-3 text-justify">
                                <p class="text-sm">¿El recurso educativo presenta una introducción clara y detallada de
                                    los objetivos de
                                    aprendizaje?</p>
                                <ul class="flex mb-3">
                                    <li class="mr-1" wire:click="$set('ratings.pregunta1',1)">
                                        <i
                                            class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta1']>=1 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('ratings.pregunta1',2)">
                                        <i
                                            class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta1']>=2 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('ratings.pregunta1',3)">
                                        <i
                                            class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta1']>=3 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('ratings.pregunta1',4)">
                                        <i
                                            class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta1']>=4 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('ratings.pregunta1',5)">
                                        <i
                                            class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta1']==5 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                </ul>
                            </div>


                            <div class="flex space-x-3">
                                <p class="text-sm"> ¿El recurso educativo utiliza diferentes tipos de medios y recursos
                                    para presentar información y fomentar el aprendizaje?</p>
                                <ul class="flex mb-3">
                                    <li class="mr-1" wire:click="$set('ratings.pregunta2',1)">
                                        <i class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta2']>=1 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('ratings.pregunta2',2)">
                                        <i class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta2']>=2 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('ratings.pregunta2',3)">
                                        <i class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta2']>=3 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('ratings.pregunta2',4)">
                                        <i class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta2']>=4 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('ratings.pregunta2',5)">
                                        <i class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta2']==5 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                </ul>

                            </div>


                            <div class="flex space-x-3">
                                <p class="text-sm"> ¿Los medios y recursos utilizados son accesibles y se cargan
                                    rápidamente?</p>
                                <ul class="flex mb-3">
                                    <li class="mr-1" wire:click="$set('ratings.pregunta3',1)">
                                        <i
                                            class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta3']>=1 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('ratings.pregunta3',2)">
                                        <i
                                            class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta3']>=2 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('ratings.pregunta3',3)">
                                        <i
                                            class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta3']>=3 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('ratings.pregunta3',4)">
                                        <i
                                            class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta3']>=4 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('ratings.pregunta3',5)">
                                        <i
                                            class="text-3xl cursor-pointer fas fa-star text-{{$ratings['pregunta3']==5 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                </ul>

                            </div>



                            {{-- <div class="flex space-x-3">
                                <p class="text-sm">¿El recurso educativo presenta aplicaciones prácticas para el
                                    aprendizaje de los estudiantes?</p>
                                <ul class="flex mb-3">
                                    <li class="mr-1" wire:click="$set('rating',1)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating>=1 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('rating',2)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating>=2 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('rating',3)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating>=3 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('rating',4)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating>=4 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('rating',5)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating==5 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                </ul>

                            </div>


                            <div class="flex space-x-3">
                                <p class="text-sm">¿El recurso educativo ha sido revisado y actualizado recientemente?
                                </p>
                                <ul class="flex mb-3">
                                    <li class="mr-1" wire:click="$set('rating',1)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating>=1 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('rating',2)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating>=2 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('rating',3)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating>=3 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('rating',4)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating>=4 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('rating',5)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating==5 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                </ul>

                            </div>


                            <div class="flex space-x-3">
                                <p class="text-sm">¿El recurso educativo cumple con los objetivos y expectativas
                                    establecidos?</p>
                                <ul class="flex mb-3">
                                    <li class="mr-1" wire:click="$set('rating',1)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating>=1 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('rating',2)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating>=2 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('rating',3)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating>=3 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('rating',4)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating>=4 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1" wire:click="$set('rating',5)">
                                        <i
                                            class="text-2xl cursor-pointer fas fa-star text-{{$rating==5 ? 'yellow': 'gray'}}-400"></i>
                                    </li>
                                </ul>

                            </div> --}}

                        </div>
                        <div class="flex flex-col w-full">
                            <textarea wire:model.defer="comment" rows="3" placeholder="Mensaje...."
                                class="p-4 rounded-md resize-none dark:text-gray-100 dark:bg-gray-900"
                                spellcheck="false" data-ms-editor="true"></textarea>
                            <button wire:click="store" type="button"
                                class=" w-full py-3 mt-8 font-semibold rounded-md text-gray-50 bg-blue-600">Dejar
                                una reseña</button>
                            @error('comment')
                            <span class="text-red-600 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>