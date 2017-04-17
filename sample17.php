SELECT band_recruitment.id, band_recruitment.name, member.name, instrument.name, instrument.name, instrument.name, instrument.name
FROM band_recruitment, member, instrument
WHERE band_recruitment.requester = member.id
AND band_recruitment.inst_1 = instrument.id
AND band_recruitment.inst_2 = instrument.id
AND band_recruitment.inst_3 = instrument.id
AND band_recruitment.inst_4 = instrument.id;