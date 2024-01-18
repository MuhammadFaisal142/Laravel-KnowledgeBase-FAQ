<?php

return [
    'userManagement' => [
        'title'          => 'Gestão de Usuários',
        'title_singular' => 'Gestão de Usuário',
    ],
    'sheetData' => [
        'title'          => 'Sheets Data',
        'title_singular' => 'Sheets Data',
        'Population_District' => 'População_Distrito',
        'Population_Large_Groups_Age' => 'Grandes Grupos Idade',
        'Foreign_Population' => 'População Estrangeira',
        'Population_growth' => 'Crescimento Pop',
        'Population_density' => 'Densidade Pop',
        'id'                => 'ID',
        'Province' => 'Província',
        'District' => 'Distrito',
        'Total_Population' => 'População total',
        'Population_men' => 'População_homens',
        'Population_women' => 'População Feminina',
        'title'             => 'Título',
        'mozambique_classification'  => 'Classificação',
        'Total_Age_0_14' => 'Total Grupo Etário 0-14',
        'Male_Age_0_14' => 'Grupo Etário 0-14 Masculino',
        'Female_Age_0_14' => 'Grupo Etário 0-14 Feminino',
        'Total_Age_15_64' => 'Total Grupo Etário 15-64',
        'Male_Age_15_64' => 'Grupo Etário 15-64 Masculino',
        'Female_Age_15_64' => 'Grupo Etário 15-64 Feminino',
        'Total_Age_65_Plus' => 'Total Grupo Etário 65+',
        'Male_Age_65_Plus' => 'Grupo Etário 65+ Masculino',
        'Female_Age_65_Plus' => 'Grupo Etário 65+ Feminino',
        'Foreign_Population_Total' => 'População Estrangeira - Total',
        'Foreign_Population_Males' => 'População Estrangeira - Homens',
        'Foreign_Population_Females' => 'População Estrangeira - Mulheres',
        'Population_Growth_Rate' => 'Taxa Cresc População',
        'Density' => 'Densidade',
    ],
    'permission'     => [
        'title'          => 'Permissões',
        'title_singular' => 'Permissão',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Título',
            'title_helper'      => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Excluído em',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Funções',
        'title_singular' => 'Função',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Título',
            'title_helper'       => '',
            'permissions'        => 'Permissões',
            'permissions_helper' => '',
            'created_at'         => 'Criado em',
            'created_at_helper'  => '',
            'updated_at'         => 'Atualizado em',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Excluído em',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Usuários',
        'title_singular' => 'Usuário',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nome',
            'name_helper'              => '',
            'email'                    => 'E-mail',
            'email_helper'             => '',
            'email_verified_at'        => 'Verificado em',
            'email_verified_at_helper' => '',
            'password'                 => 'Senha',
            'password_helper'          => '',
            'roles'                    => 'Funções',
            'roles_helper'             => '',
            'remember_token'           => 'Token de Lembrança',
            'remember_token_helper'    => '',
            'created_at'               => 'Criado em',
            'created_at_helper'        => '',
            'updated_at'               => 'Atualizado em',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Excluído em',
            'deleted_at_helper'        => '',
        ],
    ],
    'category'       => [
        'title'          => 'Categorias',
        'title_singular' => 'Categoria',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Excluído em',
            'deleted_at_helper' => '',
        ],
    ],
    'tag'            => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Excluído em',
            'deleted_at_helper' => '',
        ],
    ],
    'article'        => [
        'title'          => 'Artigos',
        'title_singular' => 'Artigo',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Título',
            'title_helper'      => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'short_text'        => 'Texto Curto',
            'short_text_helper' => '',
            'full_text'         => 'Texto Completo',
            'full_text_helper'  => '',
            'category'          => 'Categoria',
            'category_helper'   => '',
            'tags'              => 'Tags',
            'tags_helper'       => '',
            'views_count'       => 'Contagem de Visualizações',
            'views_count_helper'=> '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Excluído em',
            'deleted_at_helper' => '',
        ],
    ],
    'faqManagement'  => [
        'title'          => 'Gestão de FAQ',
        'title_singular' => 'Gestão de FAQ',
    ],
    'faqCategory'    => [
        'title'          => 'Categorias',
        'title_singular' => 'Categoria',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'category'          => 'Categoria',
            'category_helper'   => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Excluído em',
            'deleted_at_helper' => '',
        ],
    ],
    'faqQuestion'    => [
        'title'          => 'Perguntas',
        'title_singular' => 'Pergunta',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'category'          => 'Categoria',
            'category_helper'   => '',
            'question'          => 'Pergunta',
            'question_helper'   => '',
            'answer'            => 'Resposta',
            'answer_helper'     => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Excluído em',
            'deleted_at_helper' => '',
        ],
    ],
];