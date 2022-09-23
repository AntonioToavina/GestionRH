--Query grand livre par compte (boucler sur la requête avec tout les comptes(remplacer les ?) pour avoir le grand livre complet)
preciser: compte,idexercice

CREATE View grand_livre as SELECT * FROM
((select 
    d.datecreation::text as datedebit,
    d.debit::text,
    c.datecreation::text as datecredit,
    c.credit::text
from
(select e1.datecreation,e1.debit from ecriture e1 where ecriture.debit>0) as d,
(select e2.datecreation,e2.credit from ecriture e2 where ecriture.credit>0) as c

)
UNION
(
    select 
        '',
        case 
            when (sum(debit)-sum(credit))>0 then 'Debiteur'
            when (sum(debit)-sum(credit))<0 then 'Crediteur'
        end as solde,
        case 
            when sum(debit)-sum(credit)<0 then ((sum(debit)-sum(credit))*(-1))::text
            else (sum(debit)-sum(credit))::text
        end as valeur,
        ''
    from ecriture
    group by compte
)   )

--Query bilan
(
select
	d.compte::text as comptedebit,
	d.debit::text,
	c.compte::text as comptecredit,
	c.credit::text
from (
		select compte,sum(ecriture.debit)-sum(ecriture.credit) as debit from ecriture where  idexercice= 1 group by ecriture.compte
		 having (sum(ecriture.debit)-sum(ecriture.credit)) >0
	) as d,
	(
		select compte,sum(ecriture.debit)-sum(ecriture.credit) as credit from ecriture where  idexercice= 1  group by ecriture.compte
		having (sum(ecriture.debit)-sum(ecriture.credit)<0)
	) as c
)
UNION
(
    select 
        'Total debit',
        d.total_debit::text,
        'Total credit',
        c.total_credit::text
    from
    (
        select
        sum(debit)-sum(credit) as total_debit
        from ecriture  where idexercice= 1 having (sum(ecriture.debit)-sum(ecriture.credit)) >0
    ) as d,
    (
        select
        sum(credit)- sum(debit) as total_credit
        from ecriture  where idexercice= 1 having (sum(ecriture.debit)-sum(ecriture.credit)) < 0
    ) as c
)