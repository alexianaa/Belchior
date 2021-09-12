USE [aug]
GO
/****** Object:  Table [dbo].[DS123]    Script Date: 12/09/2021 16:40:33 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DS123](
	[Carimbo_de_data_hora] [datetime2](7) NOT NULL,
	[Nome_completo_da_o_dona_o] [nvarchar](50) NOT NULL,
	[Nome_do_brechó] [nvarchar](50) NOT NULL,
	[Tipo_de_produto_vendido] [nvarchar](50) NOT NULL,
	[Endereço_completo_da_loja_Rua_número_bairro_cidade_CEP_estado_etc_ou_link_da_loja_virtual] [nvarchar](100) NOT NULL,
	[Link_da_localização_no_Google_Maps] [nvarchar](150) NULL,
	[Telefone_e_ou_redes_sociais_da_loja_links] [nvarchar](100) NOT NULL,
	[Dia_e_horário_de_funcionamento] [nvarchar](50) NOT NULL,
	[Fotos_a_serem_exibidas_obrigatório_pelo_menos_uma_foto] [nvarchar](350) NOT NULL
) ON [PRIMARY]
GO
