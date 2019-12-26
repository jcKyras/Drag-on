from django import template

register = template.Library()

@register.filter(name='porcentagem_impressora')
def porcentagem_impresora(medicao):
     impressora = medicao.impressora

     porcentagem = (impressora.cont_impressoes - medicao.contador)/impressora.cont_max_impressoes*100

     return str(porcentagem)
