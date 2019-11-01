create database pi_academia;
use pi_academia;

create table treinador(
	id_treinador integer primary key auto_increment,
    nome varchar(45),
    matricula varchar(45),
    email varchar(45),
    senha varchar(45),
    data_nascimento date,
    sexo varchar(45),
    cargo varchar(45),
    tipo_conta varchar(45)
);

create table usuario(
	id_usuario integer primary key auto_increment,
    nome varchar(80),
    matricula varchar(80),
    email varchar(80),
    senha varchar(80),
    data_nascimento date,
    sexo varchar(80),
    cargo varchar(80),
    tipo_conta varchar(80)
);

create table avaliacao(
	id_avaliacao integer primary key auto_increment,
    pressao_arterial varchar(80),
    peso float,
    altura float,
    imc float
);

create table trein_usua_aval(
	id_trein_usua_aval integer primary key auto_increment,
    data_avaliacao date,
    id_treinador integer,
    id_usuario integer,
    id_avaliacao integer,
	foreign key (id_treinador) references treinador(id_treinador),
    foreign key (id_usuario) references usuario(id_usuario),
    foreign key (id_avaliacao) references avaliacao(id_avaliacao)
);

create table medidas(
	id_medidas integer primary key auto_increment,
    pescoco float,
    biceps_direito float,
    biceps_esquerdo float,
    antebraco_direito float,
    antebraco_esquerdo float,
    peito float,
    cintura float,
    quadris float,
    coxa_direita float,
    Coxa_esquerda float,
    Panturrilha_direita float,
    Panturrilha_esquerda float,
    id_avaliacao integer,
    foreign key (id_avaliacao) references avaliacao(id_avaliacao)
);

create table treino(
	id_treino integer primary key auto_increment,
    dias_treino varchar(255),
    objetivo varchar(255),
    observacoes varchar(255)
);

create table trein_usua_treino(
	id_trein_usua_treino integer primary key auto_increment,
    data_criacao date,
    data_validade date,
    id_treinador integer,
    id_usuario integer,
    id_treino integer,
	foreign key (id_treinador) references treinador(id_treinador),
    foreign key (id_usuario) references usuario(id_usuario),
    foreign key (id_treino) references treino(id_treino)
);

create table exercicio(
	id_exercicio integer primary key auto_increment,
    parte_corpo varchar(80),
    nome_exercicio varchar(80),
    series integer,
    repeticoes integer,
    dia_semana integer
);

create table treino_exercicio(
	id_treio_exercicio integer primary key auto_increment,
    id_treino integer,
    id_exercicio integer,
	foreign key (id_treino) references treino(id_treino),
    foreign key (id_exercicio) references exercicio(id_exercicio)
);

create table dias_atendimento(
	id_dias_atend integer primary key auto_increment,
    dia_semana varchar(80),
    turno varchar(80),
    horario_entrada time,
    horario_saida time,
    id_treinador integer,
    foreign key (id_treinador) references treinador(id_treinador)
);

create table anamnese(
	id_anamnese integer primary key auto_increment,
    objetivo varchar(80),
    pratica_atv_fis varchar(80),
    retricoes varchar(80),
    cirurgia varchar(80),
    alergia varchar(80),
    problema_osteomuscular varchar(80),
    cardiopatia varchar(80),
    medicamento varchar(80),
    suplemento varchar(80),
    fumar varchar(80),
    diabetico varchar(80),
    diabetico_familia varchar(80),
    tontura_desmaio varchar(80),
    dores_peito varchar(80),
    pressao_arterial varchar(80),
    quais_atv_fis varchar(80),
    frequencia_smnl_atv_fis varchar(80),
    espec_retricoes varchar(80),
    espec_cirurgia varchar(80),
    espec_alergia varchar(80),
    espec_osteomuscular varchar(80),
    espec_cardiopatia varchar(80),
    espec_medicamento varchar(80),
    espec_suplemento varchar(80),
    id_usuario integer,
    foreign key (id_usuario) references usuario(id_usuario)
);