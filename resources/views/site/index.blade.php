@extends('layout.main2')

@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('images/photo-1623387641168-d9803ddd3f35.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-11 ftco-animate text-center">
				<h1 class="mb-4" style="text-shadow: 2px 2px 4px rgba (0, 0, 0, 0.3);"> GoodPet <br> Plano de saúde animal </h1>
				<!-- <p><a href="#section-counter" class="btn btn-primary mr-md-4 py-3 px-4"> Saiba mais <span class="ion-ios-arrow-forward"></span></a></p> -->
			</div>
		</div>
	</div>
</div>

<section class="ftco-section bg-light ftco-no-pt ftco-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
				<div class="d-block services text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa-solid fa-money-bills"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Planos com e sem cooparticipação</h3>
						<p>Economia tanto na mensalidade, quanto na hora de usar o plano. Você que escolhe!</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
				<div class="d-block services text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa-solid fa-shield-cat"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Segurança</h3>
						<p>Fique despreocupado com a saúde do seu bichinho, a GoodPet resolve pra você!</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
				<div class="d-block services text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa-solid fa-file-medical"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">O melhor plano para o seu pet.</h3>
						<p>A GoodPet é uma das únicas operadoras do Brasil que oferece uma diversidade ampla de planos para seu bichinho de estimação.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container">
		<div class="row d-flex no-gutters">
			<div class="col-md-5 d-flex">
				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about-1.jpg);">
				</div>
			</div>
			<div class="col-md-7 pl-md-5 py-md-5">
				<div class="heading-section pt-md-5">
					<h2 class="mb-4">Benefícios do seu bichinho</h2>
				</div>
				<div class="row">
					<div class="col-md-6 services-2 w-100 d-flex">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
						<div class="text pl-3">
							<h4>Consultas Medicas</h4>
							<p>Naquele momento inesperado, seu pet tem acesso aos médicos veterinários credenciados a GoodPet.</p>
						</div>
					</div>
					<div class="col-md-6 services-2 w-100 d-flex">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
						<div class="text pl-3">
							<h4>Exames</h4>
							<p>Acesso a exames de imagem e análises laboratoriais em nossas clínicas credenciadas.</p>
						</div>
					</div>
					<div class="col-md-6 services-2 w-100 d-flex">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
						<div class="text pl-3">
							<h4>Atendimento 24 horas</h4>
							<p>Seja na madrugada, durante o dia ou a noite, assim que necessário seu bichinho será atendido.</p>
						</div>
					</div>
					<div class="col-md-6 services-2 w-100 d-flex">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
						<div class="text pl-3">
							<h4>Médicos Veterinários Especializados</h4>
							<p>Vários especialistas para atender a demanda certeira do seu pet.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="ftco-section bg-light ftco-faqs">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="heading-section mb-5 mt-5 mt-lg-0">
					<h2 class="mb-3">Dúvidas frequentes</h2>
					<p>Confira as principais dúvida de quem vai assinar um plano pet</p>
				</div>
				<div id="accordion" class="myaccordion w-100" aria-bs-multiselectable="true">
					<div class="card">
						<div class="card-header p-0" id="headingOne">
							<h2 class="mb-0">
								<button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-bs-parent="#accordion" data-bs-toggle="collapse" aria-bs-expanded="true" aria-bs-controls="collapseOne">
									<p class="mb-0">Bla bla bla titulo do texto</p>
									<i class="fa" aria-bs-hidden="true"></i>
								</button>
							</h2>
						</div>
						<div class="collapse show" id="collapseOne" role="tabpanel" aria-bs-labelledby="headingOne">
							<div class="card-body py-3 px-0">
								<ol>
									<li>Bla bla bla texto 2</li>
									<li>Bla bla bla texto 2</li>
									<li>Bla bla bla texto 2</li>
									<li>Bla bla bla texto 2</li>
									<li>Bla bla bla texto 2</li>
								</ol>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header p-0" id="headingTwo" role="tab">
							<h2 class="mb-0">
								<button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-bs-parent="#accordion" data-bs-toggle="collapse" aria-bs-expanded="false" aria-bs-controls="collapseTwo">
									<p class="mb-0">Bla bla bla outro titulo</p>
									<i class="fa" aria-bs-hidden="true"></i>
								</button>
							</h2>
						</div>
						<div class="collapse" id="collapseTwo" role="tabpanel" aria-bs-labelledby="headingTwo">
							<div class="card-body py-3 px-0">
								<ol>
									<li>Bla bla bla outro texto</li>
									<li>Bla bla bla outro texto</li>
									<li>Bla bla bla outro texto</li>
									<li>Bla bla bla outro texto</li>
									<li>Bla bla bla outro texto</li>
								</ol>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header p-0" id="headingThree" role="tab">
							<h2 class="mb-0">
								<button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-bs-parent="#accordion" data-bs-toggle="collapse" aria-bs-expanded="false" aria-bs-controls="collapseThree">
									<p class="mb-0">Bla bla bla outro titulo de novo</p>
									<i class="fa" aria-bs-hidden="true"></i>
								</button>
							</h2>
						</div>
						<div class="collapse" id="collapseThree" role="tabpanel" aria-bs-labelledby="headingTwo">
							<div class="card-body py-3 px-0">
								<ol>
									<li>Bla bla bla outro texto</li>
									<li>Bla bla bla outro texto</li>
									<li>Bla bla bla outro texto</li>
									<li>Bla bla bla outro texto</li>
									<li>Bla bla bla outro texto</li>
								</ol>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header p-0" id="headingFour" role="tab">
							<h2 class="mb-0">
								<button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-bs-parent="#accordion" data-bs-toggle="collapse" aria-bs-expanded="false" aria-bs-controls="collapseFour">
									<p class="mb-0">Bla bla bla mais um titulo?</p>
									<i class="fa" aria-bs-hidden="true"></i>
								</button>
							</h2>
						</div>
						<div class="collapse" id="collapseFour" role="tabpanel" aria-bs-labelledby="headingTwo">
							<div class="card-body py-3 px-0">
								<p>Bla bla bla esses texto são realmente necessários?</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- <section class="ftco-section testimony-section" style="background-image: url('');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2>Quem conhece, aprova</h2>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="splide carousel-testimony">
					<div class="splide__track">
						<ul class="splide__list">
							<li class="splide__slide">
								<div class="testimony-wrap py-4">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-quote-left"></span>
									</div>
									<div class="text">
										<p class="mb-4">Bla bla bla outro texto de feedback</p>
										<div class="d-flex align-items-center">
											<div class="pl-3">
												<p class="name">Roger S.</p>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="splide__slide">
								<div class="testimony-wrap py-4">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-quote-left"></span>
									</div>
									<div class="text">
										<p class="mb-4">Bla bla bla outro texto</p>
										<div class="d-flex align-items-center">
											<div class="pl-3">
												<p class="name">Roberta M.</p>
											</div>
										</div>
									</div>
								</div>
							</li>
							Add more testimonials following the same pattern 
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- Planos novos -->

<section id="planos" class="planos-section ftco-section bg-light">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2>Conheça nossos planos</h2>
			</div>
			<div class="d-lg-none">
				<span style="font-size: 18px;">(Passe para o lado)</span>
			</div>
		</div>

		<!-- inicio carrosel -->
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="splide carousel-planos">
					<div class="splide__track">
						<ul class="splide__list">
							<!-- First Plan -->
							<li class="splide__slide">
								<div class="block-7 planos-wrap py-4">
									<div class="img" style="background-image: url(images/pricing-1.jpg);"></div>
									<div class="text-center p-4">
										<span class="excerpt d-block">Pet Inicial</span>
										<span class="price"><sup>R$</sup> <span class="number">39,90</span> <sub>/mês</sub></span>
										<small class="text-muted d-block mt-1" style="font-size: 14px;">
											Valor sem coparticipação: R$ 69,90/mês
										</small>

										<div class="accordion mt-4" id="accordionPlano1">
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingPlano1">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePlano1" aria-expanded="false" aria-controls="collapsePlano1">
														Ver Benefícios
													</button>
												</h2>
												<div id="collapsePlano1" class="accordion-collapse collapse" aria-labelledby="headingPlano1" data-bs-parent="#accordionPlano1">
													<div class="accordion-body text-start">
														<ul class="pricing-text mb-0">
															<li>Consulta generalista</li>
															<li>Vacinas</li>
															<li>Testes rápidos</li>
															<li>Exames laboratoriais simples</li>
															<li>Procedimentos clínicos</li>
														</ul>
														<button class="btn btn-primary d-block px-2 py-3 mt-3"
															data-bs-toggle="modal"
															data-bs-target="#modalPlano1">
															Ver detalhes do plano
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>

							<!-- Second Plan -->
							<li class="splide__slide">
								<div class="block-7 planos-wrap py-4">
									<div class="img" style="background-image: url(images/pricing-2.jpg);"></div>
									<div class="text-center p-4">
										<span class="excerpt d-block">Pet Intermediário</span>
										<span class="price"><sup>R$</sup> <span class="number">69,90</span> <sub>/mês</sub></span>
										<small class="text-muted d-block mt-1" style="font-size: 14px;">
											Valor sem coparticipação: R$ 99,90/mês
										</small>

										<div class="accordion mt-4" id="accordionPlano2">
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingPlano2">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePlano2" aria-expanded="false" aria-controls="collapsePlano2">
														Ver Benefícios
													</button>
												</h2>
												<div id="collapsePlano2" class="accordion-collapse collapse" aria-labelledby="headingPlano2" data-bs-parent="#accordionPlano2">
													<div class="accordion-body text-start">
														<ul class="pricing-text mb-0">
															<li>Beneficios do Plano inicial</li>
															<li>Consultas especiais</li>
															<li>Internações e procedimento de apoio</li>
															<li>Procedimento Veterinários</li>
															<li>Exames de imagem</li>
															<li>Anestesias/sedação</li>
														</ul>
														<button class="btn btn-primary d-block px-2 py-3 mt-3"
															data-bs-toggle="modal"
															data-bs-target="#modalPlano2">
															Ver detalhes do plano
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>

							<!-- Third Plan -->
							<li class="splide__slide">
								<div class="block-7 planos-wrap py-4">
									<div class="img" style="background-image: url(images/pricing-3.jpg);"></div>
									<div class="text-center p-4">
										<span class="excerpt d-block">Pet Avançado</span>
										<span class="price"><sup>R$</sup> <span class="number">189,90</span> <sub>/mês</sub></span>
										<small class="text-muted d-block mt-1" style="font-size: 14px;">
											Valor sem coparticipação: R$ 229,90/mês
										</small>

										<div class="accordion mt-4" id="accordionPlano3">
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingPlano3">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePlano3" aria-expanded="false" aria-controls="collapsePlano3">
														Ver Benefícios
													</button>
												</h2>
												<div id="collapsePlano3" class="accordion-collapse collapse" aria-labelledby="headingPlano3" data-bs-parent="#accordionPlano3">
													<div class="accordion-body text-start">
														<ul class="pricing-text mb-0">
															<li>Beneficios do plano intermediario</li>
															<li>Procedimentos do trato digestivo</li>
															<li>Cirurgias</li>
															<li>Exames especializados</li>
														</ul>
														<button class="btn btn-primary d-block px-2 py-3"
															data-bs-toggle="modal"
															data-bs-target="#modalPlano3">
															Ver detalhes do plano
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal do Plano 1 -->
<div class="modal fade" id="modalPlano1" tabindex="-1" aria-labelledby="modalPlano1Label" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalPlano1Label">Plano Pet Inicial</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
			</div>
			<div class="modal-body">
				<ul>
					<li class="mb-3">
						<strong>Consulta generalista</strong>
						<div class="text-muted">
							Consulta expediente comercial clinico geral
						</div>
						<div class="text-muted">
							Consulta de Plantão
						</div>
					</li>
					<li>
						<strong>Vacinas</strong>
						<div class="text-muted">
							Vacina antirrábica
						</div>
						<div class="text-muted">
							Vacina multipla canina v8/v10
						</div>
						<div class="text-muted">
							Vacina multipla felina v3/v4/v5
						</div>
						<div class="text-muted">
							Vacina felina felv
						</div>
					</li>
					<li>
						<strong>Testes rápidos</strong>
						<div class="text-muted">
							Teste rápido - Leishmaniose
						</div>
						<div class="text-muted">
							Teste rápido - Cinomose
						</div>
						<div class="text-muted">
							Teste rápido - Glicose/glicemia
						</div>
						<div class="text-muted">
							Teste rápido - Fiv e Felv
						</div>
					</li>
					<li>
						<strong>Exames laboratoriais simples</strong>
						<div class="text-muted">
							Hemograma completo
						</div>
						<div class="text-muted">
							Alanina Aminotransferase (TGP/ALT)
						</div>
						<div class="text-muted">
							Creatinina
						</div>
						<div class="text-muted">
							Ureia
						</div>
						<div class="text-muted">
							Urinálise (EAS)
						</div>
						<div class="text-muted">
							Coproparasitológico
						</div>
					</li>
					<li>
						<strong>Procedimentos clínicos
						</strong>
						<div class="text-muted">
							Coleta de material para exames cobertos
						</div>
					</li>
				</ul>
			</div>
			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button> -->
				<a href="{{ route('site.plano-1') }}" class="btn btn-primary">Ver cobertura completa</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal do Plano 2 -->
<div class="modal fade" id="modalPlano2" tabindex="-1" aria-labelledby="modalPlano2Label" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalPlano2Label">Plano Pet intermediario</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
			</div>
			<div class="modal-body">
				<ul>
					<li class="mb-3">
						<strong>
							Beneficios do Plano inicial
						</strong>
					</li>
					<li>
						<strong>
							Consultas especiais
						</strong>
						<div class="text-muted">
							Consulta Domiciliar
						</div>
						<div class="text-muted">
							Consulta com especialistas: Urologia, Ortopedia, Cardiologia, Dermatologia, Nefrologia, Fisiatra(Fisioterapia)
							Gastroenterologia, Endocrinologia, Felinologia, Neurologia, Nutrologia, Oftalmologia, Oncologia e Odontologia
						</div>
					</li>
					<li>
						<strong>
							Internações e procedimento de apoio
						</strong>
						<div class="text-muted">
							Internação dia e noite
						</div>
						<div class="text-muted">
							Fluidoterapia (Sorotepia) *procedimento de apoio
						</div>
						<div class="text-muted">
							Oxigenioterapia até 1 hora *procedimento de apoio
						</div>
					</li>
					<li>
						<strong>
							Procedimentos Médicos Veterinários
						</strong>
						<div class="text-muted">
							Curativos simples
						</div>
						<div class="text-muted">
							Curativos complexos
						</div>
						<div class="text-muted">
							Drenagem de abcesso (Drenagem de feridas)
						</div>
						<div class="text-muted">
							Imobilização de fraturas simples
						</div>
						<div class="text-muted">
							Limpeza de canal auditivo
						</div>
					</li>
					<li>
						<strong>
							Exames de imagem
						</strong>
						<div class="text-muted">
							Radiografia (até 3 posições)
						</div>
						<div class="text-muted">
							Ultrassom Abdominal
						</div>
					</li>
					<li>
						<strong>
							Anestesias/sedação
						</strong>
						<div class="text-muted">
							Anestesia geral injetável
						</div>
						<div class="text-muted">
							Anestesia local
						</div>
						<div class="text-muted">
							Sedação
						</div>
					</li>
					<li>
						<strong>
							Para mais informações, consultar o documento referente ao plano presente na pagina "Ver cobertura completa"
						</strong>
					</li>
				</ul>
			</div>
			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button> -->
				<a href="{{ route('site.plano-2') }}" class="btn btn-primary">Ver cobertura completa</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal do Plano 3 -->
<div class="modal fade" id="modalPlano3" tabindex="-1" aria-labelledby="modalPlano3Label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalPlano3Label">Plano Pet Inicial</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
			</div>
			<div class="modal-body">
				<ul>
					<li>Beneficios do plano intermediario</li>
					<li>Procedimentos do trato digestivo</li>
					<li>Cirurgias</li>
					<li>Exames especializados</li>
				</ul>
			</div>
			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button> -->
				<a href="{{ route('site.plano-3') }}" class="btn btn-primary">Ver cobertura completa</a>
			</div>
		</div>
	</div>
</div>


<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row d-md-flex justify-content-end">
			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
				<h2 class="mb-4">Se interessou? Nos mande uma mensagem! </h2>
				<form action="#" class="appointment">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-field">
									<div class="select-wrap">
										<div class="icon"><span class="fa fa-chevron-down"></span></div>
										<select name="" id="" class="form-control">
											<option value="">Selecione o plano</option>
											<option value="">Plano pet inicial</option>
											<option value="">Plano pet intermediario</option>
											<option value="">Plano pet avançado</option>
											<option value="">Plano pet inicial (sem coparticipação)</option>
											<option value="">Plano pet intermediario (sem coparticipação)</option>
											<option value="">Plano pet avançado (sem coparticipação)</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Seu nome">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Numero de telefone">
							</div>
						</div>
						<!-- <div class="col-md-6">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="fa fa-calendar"></span></div>
									<input type="text" class="form-control appointment_date" placeholder="Data desejada">
								</div>
							</div>
						</div> -->
						<!-- <div class="col-md-6">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="fa fa-clock-o"></span></div>
									<input type="text" class="form-control appointment_time" placeholder="Horario desejado">
								</div>
							</div>
						</div> -->
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Enviar Mensagem" class="btn btn-primary py-3 px-4">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection